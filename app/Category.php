<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// Validad ingreso de datos con sobreescritura de mensajes de error por cada regla de validación.
	public static $messages = [
	    'name.required' => 'El nombre de la categoría es un campo requerido',
	    'name.min' => 'El mínimo del nombre de la categoría es 3 caracteres',
	    //'name.unique' => 'La categoría ya está registrada',
	    'description.required' => 'La descripción  es un campo requerido',
	    'description.max' => 'La descripción  debe tener máximo 260 caracteres',
	];

    public static $rules = [
        'name' => 'required|min:3',
        'description' => 'max:260'

	];
	protected $fillable = ['name', 'description'];

    // $category->products
    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function getFeaturedImageUrlAttribute()
    {
    	$featuredProduct = $this->products()->first();
    	return $featuredProduct->featured_image_url;    	
    }
}
