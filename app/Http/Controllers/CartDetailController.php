<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartDetail;

class CartDetailController extends Controller
{
    public function store(Request $request)
    {
    	$cartDetail = new CartDetail();
    	$cartDetail->cart_id = auth()->user()->cart->id;
    	$cartDetail->product_id = $request->product_id;
    	$cartDetail->quantity = $request->quantity;
    	$cartDetail->save();

    	$notifications = 'El producto se ha agregado correctamente al carrito de compras.';
    	return back()->with(compact('notifications'));
    }    

    public function destroy(Request $request)
    {
    	$cartDetail = CartDetail::find($request->cart_detail_id);


    	if ($cartDetail->cart_id == auth()->user()->cart->id)
    		$cartDetail->delete();

    	$notifications = 'El producto se ha eliminado correctamente del carrito de compras.';
    	return back()->with(compact('notifications'));
    }     
}