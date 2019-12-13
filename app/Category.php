<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function drinks() {
        return $this->hasMany('App\Drink');
    }
}
