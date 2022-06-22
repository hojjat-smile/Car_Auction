<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoAboutUs extends Model
{

    use HasFactory;

    protected $table = 'info_about_us';

    protected $fillable = [
        'phone',
        'web',
        'email',
        'address',
    ];

}
