<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use PhpParser\Node\Stmt\Catch_;

class HomeController extends Controller
{
    public function index($category=null) {
        $data['catlist'] = Category::orderBy('name')->get();
        if ($category) {
            $data['categories']= Category::with(['drinks'=> function($query){
                $query->orderBy('name');
            }])->where('slug', $category)->get();
        } else {
            $data['categories'] = Category::with(['drinks'=> function($query){
                $query->orderBy('name');
            }])->orderBy('name')->get();
        }
        $data['selected'] = $category;
        if ($category){
            $cat = Category::where ('slug', $category)->first();
            $data['selected'] = ($cat->name);
        }
        return view('home')->with($data);
    }
}
