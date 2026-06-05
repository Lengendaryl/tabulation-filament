<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, HasRoles;
    protected static function booted(): void
    {
        static::created(function (User $user) {
            // This ensures every new account is a Super Admin automatically

            $superAdminRole = Role::firstOrCreate([
                'name' => 'super_admin',
                'guard_name' => 'web',
            ]);

            $user->assignRole($superAdminRole);
        });
    }
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function contests()
    {
        return $this->belongsToMany(Contest::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class, 'judge_id');
    }

    public function results()
    {
        return $this->hasMany(Result::class, 'judge_id');
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }
}
