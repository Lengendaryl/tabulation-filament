<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JudgesGroup extends Model
{
    protected $fillable = ['criteria_id', 'judges'];

    protected $casts = [
        'judges' => 'array'
    ];

    public function criteria()
    {
        return $this->belongsTo(Criteria::class);
    }
}
