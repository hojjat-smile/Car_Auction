<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    use HasFactory;

    protected $table = 'maker';
    protected $fillable = [
        'title',
    ];

    public function  model(){

        return $this->hasMany(ModelCar::class,'make_id','id');
    }

}










/*

*/
