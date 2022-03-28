<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;
    public function ingredients() {
        return $this->hasMany(Ingredient::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function method() {
        return $this->belongsTo(Method::class);
    }
}
