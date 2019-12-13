<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    public function ingredients() {
        return $this->hasMany('App\Ingredient');
    }
    public function category() {
        return $this->belongsTo('App\Category');
    }
    public function method() {
        return $this->belongsTo('App\Method');
    }
}
