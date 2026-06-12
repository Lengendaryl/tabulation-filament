<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable([
    'criteria',
    'judges',
    'contest_id',
    'qualified_participant',
    'final_scoring_method',
    'preliminary_scoring_method',
    'preliminary_round_percentage_score',
    'final_round_percentage_score',
])]
class Criteria extends Model
{
    use HasFactory, SoftDeletes;


    protected $casts = [
        'criteria' => 'array',
        'judges' => 'array',
    ];

    public function judge()
    {
        return $this->belongsToMany(User::class);
    }

    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function judgesGroups()
    {
        return $this->hasMany(JudgesGroup::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
    public function events()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
