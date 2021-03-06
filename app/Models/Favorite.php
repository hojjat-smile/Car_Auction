<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $table = 'favorite';
    protected $fillable = [
        'user_id',
        'ads_id',
    ];


public function ads(){

    return $this->hasOne(Ads::class , 'id','ads_id');
}
}
