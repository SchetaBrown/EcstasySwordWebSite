<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'isLeader',
        'characteristics',
        'word_view_id',
        'guild_id',
    ];

    // Связи
    public function worldView()
    {
        return $this->belongsTo(WorldView::class);
    }
    public function guild()
    {
        return $this->belongsTo(Guild::class);
    }
}
