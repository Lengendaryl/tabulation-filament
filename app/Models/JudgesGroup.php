<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['criteria_id', 'judges', 'judge_id'])]
class JudgesGroup extends Model
{
    use HasFactory;


    protected $casts = [
        'judges' => 'array',
        'judge_id' => 'array'
    ];

    public function criteria()
    {
        return $this->belongsTo(Criteria::class);
    }
}
