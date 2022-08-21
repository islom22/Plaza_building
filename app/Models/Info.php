<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $fillable = [
       'instagram',
       'telegram',
       'youtube',
       'facebook',
       'adderess1',
       'adderess2',
       'adderess3',
       'phone_number1',
       'phone_number2',
       'phone_number3',
       'email', 
       'desc',
       'video'
    ];
}
