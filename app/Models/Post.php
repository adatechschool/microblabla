<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

/** 
 * 1 post n'a qu'un utilisateur 
 */
    public function user() {
    return $this->belongsTo(User::class);
}
/**
 * Champs éditables par le user
 */
protected $fillable = [
    'description',
    'img_url',
    'user_id',
];
}


