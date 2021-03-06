<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'price',
        'user_id',
        'card_id',
        'card_type',
        'Authority',
        'pay',
        'code',
        'status',
    ];

    public function package(){


        return $this->hasOne(Packages::class,'id','card_id');
    }
    public function user(){


        return $this->hasOne(User::class,'id','user_id');
    }
}








