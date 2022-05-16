<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    protected $table = 'ads';
    protected $fillable = [
        'ads_id',
        'bid_status',
        'sale_status',
        'current_bid',
    ];



}










/*

*/
