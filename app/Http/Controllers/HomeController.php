<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Drink;
use PhpParser\Node\Stmt\Catch_;

class HomeController extends Controller
{
    public function index($category=null) {
        $data['catlist'] = Category::orderBy('name')->get();

        if ($category){
            $cat = Category::where('slug', $category)->first();
            $data['selected'] = $cat->name;
            $data['drinks'] = Drink::orderBy('name')->where('category_id', $cat->id)->paginate(20);
        } else {
            $data['drinks'] = Drink::orderBy('category_id')->orderBy('name')->paginate(20);
            $data['selected'] = null;
        }
        return view('home')->with($data);
    }
}
