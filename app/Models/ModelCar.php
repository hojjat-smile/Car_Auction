<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCar extends Model
{
    use HasFactory;

    protected $table = 'car_model';
    protected $fillable = [
        'title',
        'make_id',
    ];

}










/*

*/
