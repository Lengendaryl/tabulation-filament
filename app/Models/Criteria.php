<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    protected $fillable = [
        'criteria',
        'judges',
        'contest_id',
        'qualified_participant',
        'final_scoring_method',
        'preliminary_scoring_method',
        'preliminary_round_percentage_score',
        'final_round_percentage_score',
    ];

    protected $casts = [
        'criteria' => 'array',
        'judges' => 'array',
    ];

    public function judges()
    {
        return $this->belongsToMany(User::class);
    }


}
