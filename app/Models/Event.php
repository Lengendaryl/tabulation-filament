<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'description', 'date', 'description', 'organizer', 'venue', 'address', 'poster'])]
class Event extends Model
{
    public function contests()
    {
        return $this->hasMany(Contest::class);
    }
}
