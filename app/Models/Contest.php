<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'category', 'description', 'organizer', 'scoring_type', 'contest_type', 'date', 'venue', 'poster'])]
class Contest extends Model
{
    use HasFactory;
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function criteria()
    {
        return $this->hasMany(Criteria::class);
    }

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

    public function judges()
    {
        return $this->belongsToMany(User::class);
    }

    public function score()
    {
        return $this->hasMany(Score::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
