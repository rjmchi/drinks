<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drink;
use App\Category;
use App\Method;
use App\Ingredient;

class HomeController extends Controller
{
    public function index($category=null) {
        if ($category) {
            $data['categories']= Category::where('id', $category)->get();
        } else {
            $data['categories'] = Category::all();
        }
        $data['selected'] = $category;
        return view('cards')->with($data);
    }
}
