<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drink;
use App\Category;
use App\Method;
use App\Ingredient;

class HomeController extends Controller
{
    public function index() {
        $data['categories'] = Category::get();
        return view('home')->with($data);
    }
}
