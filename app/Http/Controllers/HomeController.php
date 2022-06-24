<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index($category=null) {
        $data['catlist'] = Category::orderBy('name')->get();
        if ($category) {
            $data['categories']= Category::with(['drinks'=> function($query){
                $query->orderBy('name');
            }])->where('id', $category)->get();
        } else {
            $data['categories'] = Category::with(['drinks'=> function($query){
                $query->orderBy('name');
            }])->orderBy('name')->get();
        }
        $data['selected'] = $category;
        return view('home')->with($data);
    }
}
