<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table = 'like';

    protected $fillable = [
        'user_id',
        'image_id',
        'like',
        'image_name',

    ];
}
