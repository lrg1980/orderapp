<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;
use App\ProductImage;
use File;

class ImageController extends Controller
{
    public function index($id) // Presentación de img de productos
    {
    	$product = Product::find($id);
    	$images = $product->images()->orderBy('featured', 'desc')->get();
    	return view('admin.products.images.index')->with(compact('product', 'images'));
    }
	
	public function store(Request $request, $id) // registrar de img de productos
	{
		//guardar la img en nuestro proyecto
		$file = $request->file('photo');
		$path = public_path() . '/images/products';
		$filename = uniqid() . $file->getClientOriginalName();
		$moved = $file->move($path, $filename);

		// crear 1 registro en la tabla product_images
		if ($moved) 
		{
			$productImage = new ProductImage();
			$productImage->image = $filename;
			// $productImage->featured = false;
			$productImage->product_id = $id;
			$productImage->save();
		}
		
		return back();
	}
	
	public function destroy(Request $request, $id) // elimina img de producto
	{
		$productImage = ProductImage::find($request->image_id);
		if (substr($productImage->image, 0, 4) === "http") {
			$deleted = true;
		} else {
			$fullPath = public_path() . '/images/products/' . $productImage->image;
			$deleted = File::delete($fullPath);		
		} 

		// eliminar el registro de la img en la bd
		if ($deleted) {
			$productImage->delete();
		}

		return back();
	}

	public function select($id, $image) 
	{
		ProductImage::where('product_id', $id)->update([
			'featured' => false
		]);

		$productImage = ProductImage::find($image);
		$productImage->featured = true;
		$productImage->save();

		return back();
	}
}