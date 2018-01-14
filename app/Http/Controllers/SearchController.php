<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function show(Request $request)
    {
    	$query = $request->input('query');
    	$products = Product::where('name', 'like', "%$query%")->paginate(5);
    	// el resultado de producto es = 1, redirige al producto
    	if ($products->count() == 1) {
    		$id = $products->first()->id;
    		return redirect("products/$id"); // Las comillas dobles con una variable dentro, es equivalente a usar las comillas simples y concatenar manualmente la variable. 'products/'.$id
    	}
    	return view('search.show')->with(compact('products', 'query'));
    }

    public function data() 
    {
    	$products = Product::pluck('name');
    	return $products;
    }
}
