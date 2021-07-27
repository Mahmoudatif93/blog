<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubTitle extends Model
{


    public function MainTitle()
    {
        return $this->belongsTo(MainTitle::class);

    }//end fo MainTitle
}
