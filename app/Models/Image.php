<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'art';

    protected $fillable = [
        'title',
        'artist',
        'exhibition',
        'image',
    ];
}