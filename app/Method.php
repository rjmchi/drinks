<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    public function drinks() {
        return $this->hasMany('App\Drink');
    }
}
