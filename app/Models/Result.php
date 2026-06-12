<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;


#[Fillable(['contest_id', 'criteria_id', 'result', 'contest_category', 'round'])]

class Result extends Model
{
    use SoftDeletes;

    protected $casts = [
        'result' => 'array'
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
