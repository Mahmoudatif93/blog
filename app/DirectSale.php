<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirectSale extends Model
{
    protected $casts = [
        'dropdownlist' => 'array'
    ];
}
