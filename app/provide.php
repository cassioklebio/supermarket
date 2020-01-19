<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provide extends Model
{
    protected $fillable = [
        'name',
        'cpfoucnpj',
        'inscr',
        'address',
        'number',
        'neighborhood',
        'cep',
        'contact',
        'phone',
        'phone_mobile'
    ];
}
