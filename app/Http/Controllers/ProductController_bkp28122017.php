<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::paginate(20);
    	return view('admin.products.index')->with(compact('products')); // listado
    }
    
    public function create()
    {
    	return view('admin.products.create'); // formulario de registro
    }
    public function store(Request $request)
    {
    	// registrar el nuevo producto en la BD
    	//dd($request->all());

        // Validad ingreso de datos con sobreescritura de mensajes de error por cada regla de validación.
        $messages = [
            'name.required' => 'El nombre del producto es un campo requerido',
            'name.min' => 'El mínimo del nombre del producto es 3 caracteres',
            'description.required' => 'La descripción corta es un campo requerido',
            'description.required' => 'La descripción corta es un campo requerido',
            'price.required' => 'El precio del producto es un campo requerido',
            'price.numeric' => 'El precio del producto debe ser numérico',
            'price.min' => 'El precio del producto debe ser positivo'
        ];

        $rules = [
            'name' => 'required|min:4',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0'
        ];

        $this->validate($request, $rules, $messages);

    	$product = new Product();
    	$product->name = $request->input('name');
    	$product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->long_description = $request->input('long_description');
    	$product->save(); // guardar en BD

    	return redirect('/admin/products');
    }

    public function edit($id)
    {
    	//return "Mostrar aqui el form de edición para el producto en el id $id";
    	$product = Product::find($id);
    	return view('admin.products.edit')->with(compact('product')); // formulario de edición
    }
    public function update(Request $request, $id) // Metodo actualizar
    {
        // Validad ingreso de datos con sobreescritura de mensajes de error por cada regla de validación.
        $messages = [
            'name.required' => 'El nombre del producto es un campo requerido',
            'name.min' => 'El mínimo del nombre del producto es 3 caracteres',
            'description.required' => 'La descripción corta es un campo requerido',
            'description.required' => 'La descripción corta es un campo requerido',
            'price.required' => 'El precio del producto es un campo requerido',
            'price.numeric' => 'El precio del producto debe ser numérico',
            'price.min' => 'El precio del producto debe ser positivo'
        ];

        $rules = [
            'name' => 'required|min:4',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0'
        ];
        $this->validate($request, $rules, $messages);   

    	// Actualizar el producto en la BD
    	//dd($request->all());

    	//$product = new Product();
    	$product = Product::find($id);
    	$product->name = $request->input('name');
    	$product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->long_description = $request->input('long_description');
    	$product->save(); // Editar ID en BD

    	return redirect('/admin/products');
    }

    public function destroy($id)
    {
        ProductImage::where('product_id', $id)->delete(); // Elimina las imagenes al eliminar el producto, dado que requiere eliminar tambien las relaciones de un producto Producto con imagen en este caso

        $product = Product::find($id);
        $product->delete(); // Eliminar

        return back();   //redirect('/admin/products');
    }
}
