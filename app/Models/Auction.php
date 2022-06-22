<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    protected $table = 'auction';
    protected $fillable = [
        'base_price',
        'rough_price',
        'buy_now',
        'sale_date',
        'ads_id',
    ];



}










/*

*/
