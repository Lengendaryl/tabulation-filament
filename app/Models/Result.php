<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['judge_id', 'contest_id', 'result', 'round'])]

class Result extends Model
{

    protected $casts = [
        'result' => 'array'
    ];

    public function judge()
    {
        return $this->belongsTo(User::class, 'judge_id');
    }

    public function contest()
    {
        return $this->belongsTo(Contest::class, 'judge_id');
    }
}
