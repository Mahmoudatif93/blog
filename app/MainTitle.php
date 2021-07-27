<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainTitle extends Model
{

    public function SubTitle()
    {
        return $this->hasMany(SubTitle::class);

    }//
}
