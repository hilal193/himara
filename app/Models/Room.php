<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function categorie_room()
    {
        return $this->belongsTo(CategorieRoom::class, 'category_room_id');
    }
}
