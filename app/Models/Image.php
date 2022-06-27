<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'ads_images';
    protected $fillable = [
        'ads_id',
        'main',
        'image',
    ];
}
