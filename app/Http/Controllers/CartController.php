<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function update()
    {
    	$cart = auth()->user()->cart;
    	$cart->status = 'Pending';
    	$cart->save(); // Update
    	
    	$notifications = 'El pedido se ha confirmado correctamente. Te contactaremos vía correo electrónico.';
    	return back()->with(compact('notifications'));
    }

}
