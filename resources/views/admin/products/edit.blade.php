@extends('layouts.app')

@section('body-class', 'products-page')
@section('title', 'Editar Producto'.' ' .'|'.' ')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">"{{ $product->name }}"</h2>
    
               @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach    
                        </ul>
            
                    </div>
                @endif
    
            <form action="{{ url('/admin/products/'.$product->id.'/edit') }}" method="post">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre del producto</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}">
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Precio del producto</label>
                            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price',$product->price) }}">
                        </div>
                    </div>
                </div>
            
                <div class="form-group label-floating">
                    <label class="control-label">Descripción corta del producto</label>
                    <input type="text" name="description" class="form-control" value="{{ old('description', $product->description) }}">
                </div>
            
            
                <div class="form-group label-floating">
                    <label class="control-label">Descripción larga del producto</label>
                    <textarea class="form-control" name="long_description" rows="5">{{ old('long_description',$product->long_description) }}</textarea>
                </div>

                <button class="btn btn-primary">Editar producto</button>
                <a href="{{ url('/admin/products') }}" class="btn btn-default">Cancelar</a>
            </form>

        </div>

    </div>

</div>


</div>
@include('includes.footer')
@endsection
