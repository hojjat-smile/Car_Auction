<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $table = 'contact_us';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'subject',
        'message',
    ];

    public function reply(){

        return $this->hasMany(ReplyContactComments::class,'contact_us_id','id');
    }

}










/*

*/
