<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['name', 'description', 'date', 'description', 'organizer', 'venue', 'address', 'poster'])]
class Event extends Model
{
    use HasFactory, SoftDeletes;
    public function contests()
    {
        return $this->hasMany(Contest::class);
    }
}
