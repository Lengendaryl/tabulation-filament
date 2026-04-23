<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{

    protected $fillable = [
        'participant'
    ];


    protected $casts = [
        'participant' => 'array',
    ];
    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }
}
