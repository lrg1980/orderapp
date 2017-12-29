<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    // $category->products
    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
