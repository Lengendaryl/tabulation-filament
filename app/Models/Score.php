<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'contest_id',
        'score',
    ];

    protected $casts = [
        'score' => 'array',
    ];
    public function judge()
    {
        return $this->belongsTo(User::class, 'judge_id');
    }

    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }
    public function criteria()
    {
        return $this->belongsTo(Criteria::class);
    }
}
