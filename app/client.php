<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $fillable = ['city_id','name','cpfoucnpj','address','number','neighborhood','phone','phone_mobile'];
}
