<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\ProductImage;

class Product extends Model
{
    // $products->category
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    // $product->images
    public function images()
    {    	
    	return $this->hasMany(ProductImage::class);
    }

    public function getFeaturedImageUrlAttribute()
    {
        $featuredImage = $this->images()->where('featured', true)->first();
        if (!$featuredImage)
            $featuredImage = $this->images()->first();

        if ($featuredImage) {
            return $featuredImage->url;
        } 
        // imagen por defecto
        return '/images/products/default.png';
    }
}
