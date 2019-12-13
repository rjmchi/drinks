<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function drink() {
        return $this->belongsTo('App\Drink');
    }}
