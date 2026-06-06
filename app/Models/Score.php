<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

#[Fillable(['judge_id', 'contest_id', 'criteria_id', 'score', 'contest_category', 'level'])]
class Score extends Model
{
    use HasFactory, LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logAll();
    }
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
