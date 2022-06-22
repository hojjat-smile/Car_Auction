<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyContactComments extends Model
{

    use HasFactory;

    protected $table = 'reply_contact_comments';

    protected $fillable = [
        'contact_us_id',
        'reply',
    ];

}
