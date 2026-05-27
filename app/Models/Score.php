<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


#[Fillable(['contest_id', 'criteria_id', 'score', 'contest_category', 'level'])]
class Score extends Model
{
    use HasFactory;
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
