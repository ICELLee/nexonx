<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'item_id', 'name', 'tags', 'image_path', 'visible', 'colors', 'graphic_identifier'
    ];

    // Entferne den alten Accessor komplett
    // Nutze stattdessen einen automatischen Cast zu Array (JSON)
    protected $casts = [
        'tags' => 'array',
    ];
}
