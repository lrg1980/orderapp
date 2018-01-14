@extends('layouts.app')

@section('body-class', 'products-page')
@section('title', 'Nuevo Producto'. '|'.' ')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Crear nuevo producto</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach    
                    </ul>
        
                </div>
            @endif
            <form action="{{ url('/admin/products') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre del producto</label>
                            <input <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Precio del producto</label>
                            <input <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}">
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group label-floating">
                        <label class="control-label">Descripción corta del producto</label>
                        <input type="text" name="description" class="form-control" value=" {{ old('description') }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group label-floating">
                        <label class="control-label">Categoría del producto</label>
                        <select class="form-control"  name="category_id">
                            <option value="0"> Sin Categoría </option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            
            
                <div class="form-group label-floating">
                    <label class="control-label">Descripción larga del producto</label>
                    <textarea class="form-control" name="long_description" rows="5">{{ old('long_description') }}</textarea>
                </div>

                <button class="btn btn-primary">Agregar producto</button>
                <a href="{{ url('/admin/products') }}" class="btn btn-default">Cancelar</a>
                
            </form>

        </div>

    </div>

</div>


</div>
@include('includes.footer')
@endsection
