<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['participant'])]
class Participant extends Model
{
    use HasFactory;
   
    protected $casts = [
        'participant' => 'array',
    ];

    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }

    public function criteria()
    {
        return $this->belongsToMany(Criteria::class);
    }
}
