<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    protected $table = 'ads';
    protected $fillable = [
        'sellertype',
        'firstname',
        'lastname',
        'addressone',
        'addresstwo',
        'city',
        'postcode',
        'telephone',
        'email',
        'membernumber',
        'sellercode',
        'collectionaddress',
        'collection_city',
        'collection_telephone',
        'mileage',
    ];

    public function image(){

        return $this->hasOne(Image::class,'ads_id','id');
    }
}
