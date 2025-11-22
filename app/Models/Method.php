<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    public function drinks() {
        return $this->hasMany(Drink::class);
    }
}
