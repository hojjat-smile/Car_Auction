<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bids extends Model
{
    use HasFactory;

    protected $table = 'bids';
    protected $fillable = [
        'price',
        'ads_id',
        'user_id',
    ];

}
