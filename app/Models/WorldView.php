<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorldView extends Model
{
    protected $fillable = [
        'title'
    ];

    // Связи
    public function character()
    {
        return $this->hasMany(Character::class);
    }
}
