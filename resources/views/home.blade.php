@extends('layouts.app')

@section('body-class', 'products-page')
@section('title', 'Escritorio'. '|'.' ')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Escritorio</h2>

            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                <li  class="active">
                    <a href="#dashboard" role="tab" data-toggle="tab">
                        <i class="material-icons">dashboard</i>
                        Carrito de compra
                    </a>
                </li>
                <li>
                    <a href="#schedule" role="tab" data-toggle="tab">
                        <i class="material-icons">list</i>
                        Pedidos realizados
                    </a>
                </li>
            </ul>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-heading">
                        <p>Tu carrito de compras presenta {{ auth()->user()->cart->details->count() }} productos y el subtotal es {{ auth()->user()->cart->price }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    @if (session('notifications'))
                    <div class="alert alert-success">
                        {{ session('notifications') }}
                    </div>
                    @endif
                </div>
            
            </div>
             
            <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Cantidad</th>
                                <th class="text-center">Precio</th>
                                <th class="text-center">Subtotal</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach (auth()->user()->cart->details as $detail)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ $detail->product->featured_image_url }}" height="50">
                                </td>
                                <td class="text-left">
                                    <a href="{{ url('/products/'.$detail->product->id) }}">{{ $detail->product->name }}</a>
                                </td>
                                <td class="text-center">{{ $detail->quantity}}</td>
                                <td class="text-center">$ {{ $detail->product->price}}</td>
                                <td class="text-center">$ {{ $detail->quantity * $detail->product->price}}</td>

                                <td class="td-actions text-center">
                                    <form action="{{ url('/cart') }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE')}} {{-- En caso de utilizar Delete en rutas--}}
                                        <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">
                                        <a href="{{ url('/products/'.$detail->product->id) }}" rel="tooltip" title="Ver producto" target="_blank" class="btn btn-info btn-simple btn-xs">
                                        <!--<i class="material-icons">visibility</i>-->
                                        <i class="material-icons">info</i>
                                        </a>                                        
                                        <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                       <form method="post" action="{{ url('/order') }}">
                        {{ csrf_field() }}    
                            <button class="btn btn-primary btn-round">
                                <i class="material-icons">done</i> Hacer pedido
                            </button>
                        </form>
                    </div>
        </div>
    </div>
</div>

</div>
@include('includes.footer')
@endsection