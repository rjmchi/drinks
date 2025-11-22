<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function drink() {
        return $this->belongsTo(Drink::class);
    }
}
