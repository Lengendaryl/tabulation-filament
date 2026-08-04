# Tabulation-Filament Coding Style & Paradigm

## Tech Stack

- **PHP 8.3** / **Laravel 13** / **Filament ~5.0** (Schema API)
- **Blade** + **Flux UI 2** (Livewire) + **Alpine.js 3** + **Tailwind CSS 4**
- **Pest 4** for testing · **Laravel Pint** for code style (PSR-12)
- **Vite 8** for bundling · **Laravel Reverb** for real-time
- **MySQL** (prod) / **SQLite** (test)

## Architecture

### Dual-Panel Filament
- **Admin panel** (`/admin`): Full CRUD for events, contests, accounts, roles, results.
- **Judge panel** (`/`): Score submission UI, read-only contest views.
- Panel access is gated by `User::canAccessPanel()` — `super_admin` role vs. everyone else.

### Resource Directory Convention
Every domain entity follows a strict folder layout under `app/Filament/{Resources, Judge/Resources}/`:

```
{Entity}/
  ├── {Entity}Resource.php           # Model binding, navigation, page routes
  ├── Pages/
  │   ├── List{Entities}.php
  │   ├── Create{Entity}.php
  │   ├── Edit{Entity}.php
  │   └── View{Entity}.php
  ├── RelationManagers/
  │   └── {Related}RelationManager.php
  ├── Schemas/
  │   └── {Entity}Form.php           # Static configure(Schema): Schema
  └── Tables/
      └── {Entities}Table.php        # Static configure(Table): Table
```

- Resources delegate `form()` / `table()` to their extracted Schema/Table classes.
- No controllers — Filament auto-discovers pages and resources.

### No Service Layer
Business logic lives **inline** in RelationManagers and Pages. No `app/Services/` or `app/Repositories/` directories. Logic is organized as public methods on the component (e.g., `criteriaShape()`, `judgeGroup()`, `totalScore()` on `CriteriaRelationManager`).

## PHP Conventions

### Models
- Use PHP 8 **attributes** for fillable/hidden (not `$fillable`/`$hidden` properties):

```php
#[Fillable(['name', 'category', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable implements FilamentUser
{
    use HasFactory, SoftDeletes, HasRoles, Notifiable;
```

- `$casts` property for JSON columns: `protected $casts = ['score' => 'array'];`
- Relationship methods use **camelCase** (singular `belongsTo`, plural `hasMany`).
- No accessors/mutators — nested data stored as JSON and manipulated in PHP.
- Most models use `SoftDeletes`.

### Naming
| Thing | Convention | Example |
|-------|-----------|---------|
| Classes | PascalCase | `ContestResource` |
| Methods | camelCase | `criteriaShape()`, `loadScoresByTab()` |
| DB tables | snake_case plural | `contests`, `criterias` |
| FK columns | snake_case | `contest_id`, `judge_id` |
| Pivot | singular snake | `contest_user` |
| Enum cases | PascalCase or SCREAMING | `Round::Final`, `ScoringType::POINT_BASED` |

### Type Safety
- **Return types on all public/protected methods**: `: void`, `: bool`, `: array`, `: Schema`, `: Table`, `: string`
- **Parameter type hints** always present.
- `declare(strict_types=1)` used in Policies / some Files but **not required** — project is inconsistent; match the file you're in.
- Union types used: `protected static string|BackedEnum|null`

### Enums
Backed string enums in `app/Enums/`:

```php
enum Round: string
{
    case Preliminary = 'preliminary';
    case Final = 'final';
    case PrelimFinal = 'prelimFinal';
}
```

## Frontend Patterns

### Blade Components
- **Filament panel layout**: `<x-filament-panels::page>`
- **Flux UI**: `flux:card`, `flux:table`, `flux:heading`, `flux:input`, `flux:button`, `flux:icon.*`
- **Livewire anonymous components** for result-display tables (no separate class file):

```blade
<?php
new class extends Component {
    public string $gender;
    public Collection $criteria;
    #[Computed] public function result() { ... }
};
?>
```

### Alpine.js
- Custom data via `Alpine.data('rankingSystem', ...)` in `resources/js/criteria.js`.
- Inline in Blade for score-hide/reveal: `x-data="{ isShowing: false }"`, `x-on:keypress`, `x-text`, `x-bind:class`.
- `$wire.entangle()` for Livewire → Alpine two-way binding.

### Real-Time
- **PHP**: `JudgeSubmittedEvent` broadcasts on public `judging` + private `judge.{id}` channels. `TabulateEvent` on `tabulate` channel.
- **JS**: Laravel Echo listens via `#[On('echo:tabulate,.Tabulate')]` attribute on Livewire components.
- **Server**: Laravel Reverb.

### Wire Directives
- `wire:model` for two-way binding (score inputs).
- `wire:click`, `wire:submit.prevent` for actions.
- `wire:loading.attr="disabled"` for loading states.
- `:disabled` (Blade) for computed disable state.

## Database / JSON

Key entities store complex data as **JSON columns** rather than normalized tables:
- `criterias.criteria` — contest blocks with criteria, levels, weights
- `participants.participant` — all participant fields as a JSON object
- `scores.score` — array of per-participant scores with criteria breakdown
- `results.result` — computed tabulation output
- `judges_groups.judge_id` / `judges` — judge assignments with status

This is a deliberate choice for flexible contest structures. Cast as `'array'` in models.

## Testing

- **Pest 4** with SQLite in-memory (`phpunit.xml`).
- Convention: `tests/Feature/`, `tests/Unit/`.
- Currently minimal — only skeleton tests exist (`ExampleTest`).

## Patterns to Follow

1. **New Filament entity**: Create the Resource + `Schemas/{Entity}Form.php` + `Tables/{Entities}Table.php` + `Pages/` + `RelationManagers/` as needed.
2. **JSON storage**: Use `$casts = ['column' => 'array']` and store structured data rather than adding new DB columns.
3. **Business logic**: Add methods directly on the RelationManager or Page class. Extract to a method, not a separate service class.
4. **Blade views**: Use Flux components (`flux:*`) and Filament layout components (`x-filament::*`). Avoid raw HTML tables.
5. **Client-side ranking**: Use Alpine data (`x-data="rankingSystem(...)"`) for real-time computation.
6. **Broadcasting**: Fire events after mutations (`broadcast(new JudgeSubmittedEvent(...))->toOthers()`).
7. **Validation**: Use `Halt` exception or `Notification::make()->color('danger')` for inline feedback.
8. **Formatting**: Run `./vendor/bin/pint` before committing. No `@return` PHPDoc on simple methods.
