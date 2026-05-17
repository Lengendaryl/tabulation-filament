<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JudgesGroup extends Model
{
    protected $fillable = ['criteria_id', 'judges', 'judge_id'];

    protected $casts = [
        'judges' => 'array',
        'judge_id' => 'array'
    ];

    public function criteria()
    {
        return $this->belongsTo(Criteria::class);
    }
}
