@extends('layouts.app')

@section('body-class', 'product-page')
@section('title', 'Listado de productos' . ' ' . '|'.' ')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de productos</h2>
            <div class="team">
                <div class="row">                   
                    <a href="{{ url('/admin/products/create')}}" class="btn btn-primary btn-round center">Nuevo producto</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="col-md-2 text-center">Nombre</th>
                                <th class="col-md-5 text-center">Descripción</th>
                                <th class="text-center">Categoría</th>
                                <th class="text-center col-md-2">Precio</th>
                                <th class="text-center col-md-4">Opciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td class="text-center">{{ $product->id}}</td>
                                <td class="text-center">{{ $product->name}}</td>
                                <td class="text-center">{{ $product->description}}</td>
                                <td class="text-center">{{ $product->category_name}}</td> <!--Ternario por calculado -> ? $product->category->name : 'Sin Categoría'-->
                                <td class="text-center">$ {{ $product->price}}</td>
                                <td class="td-actions">
                                    <form action="{{ url('/admin/products/'.$product->id.'/delete')}}" method="post">
                                        {{ csrf_field() }}
                                        {{-- {{ method_field('DELETE')}} En caso de utilizar Delete en rutas--}}
                                        <a href="{{ url('/products/'.$product->id) }}" target="_blank" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">
                                        <i class="material-icons">visibility</i>
                                        </a>
                                        <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs"><i class="material-icons">mode_edit</i>

                                        <a href="{{ url('/admin/products/'.$product->id.'/images')}}" rel="tooltip" title="Imagenes del producto" class="btn btn-warning btn-simple btn-xs"><i class="material-icons">image</i>
                                        </a>
                                        
                                        <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs ">
                                                <i class="material-icons">delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $products->links() }} <!-- Paginación de productos-->
                </div>
            </div>

        </div>


    </div>

</div>

</div>

@include ('includes.footer')
@endsection
