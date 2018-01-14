<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;

class TestController extends Controller
{
    public function welcome()
    {
    	//$products = Product::paginate(12);
        //return view('welcome')->with(compact('products')) ;

        $categories = Category::has('products')->get();
        return view('welcome')->with(compact('categories')) ;
    }
}
