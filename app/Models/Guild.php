<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
    protected $fillable = [
        'title',
        'description',
        'goal',
        'additional_information',
    ];

    // Связи
    public function character() {
        return $this->hasMany(Character::class);
    }
}
