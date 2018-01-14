<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
//use App\Admin\Edit;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::orderBy('id', 'asc')->paginate(10);
    	return view('admin.categories.index')->with(compact('categories')); // listado
    }
    
    public function create()
    {
    	return view('admin.categories.create'); // formulario de registro
    }

    public function store(Request $request)
    {
    	// registrar el nuevo categoría en la BD
    	//dd($request->all());

        // Validad ingreso de datos con sobreescritura de mensajes de error por cada regla de validación.
        $this->validate($request, Category::$rules, Category::$messages);
        Category::create($request->all());
    	return redirect('/admin/categories');
    }

    public function edit(Category $category)
    {
    	//return "Mostrar aqui el form de edición para el producto en el id $id";
    	// lo llevamos con la función edit "($category = Category::find($id);"
    	return view('admin.categories.edit')->with(compact('category')); // formulario de edición
    }
   
   public function update(Request $request, Category $category) // Metodo actualizar
    {
        
        $this->validate($request, Category::$rules, Category::$messages);   
    	// Actualizar el producto en la BD
        //$category->update($request->all());
        $category->update($request->only('name', 'description'));


    	return redirect('/admin/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete(); // Eliminar

        return back();   //redirect('/admin/products');

       // $category->delete(); // Eliminar

        //return back();   //redirect('/admin/categories');
    }
}
