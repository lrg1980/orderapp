@extends('layouts.app')

@section('body-class', 'product-page')
@section('title', 'Listado de productos' . ' ' . '|'.' ')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de categorías</h2>
            <div class="team">
                <div class="row">                   
                    <a href="{{ url('/admin/categories/create')}}" class="btn btn-primary btn-round center">Nueva categoría</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="col-md-2 text-center">Nombre</th>
                                <th class="col-md-7 text-center">Descripción</th>
                                <th class="text-center col-md-3">Opciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td class="text-center">{{ $category->id}}</td>
                                <td class="text-center">{{ $category->name}}</td>
                                <td class="">{{ $category->description}}</td>
                                <td class="td-actions">
                                    <form action="{{ url('/admin/categories/'.$category->id)}}" method="post">
                                        {{ csrf_field() }}          
                                        {{ method_field('DELETE') }}
                                        <a href="#" rel="tooltip" title="Ver categoría" class="btn btn-info btn-simple btn-xs"> <i class="material-icons">visibility</i>
                                        </a>
                                        <a href="{{ url('/admin/categories/'.$category->id.'/edit') }}" rel="tooltip" title="Editar categoría" class="btn btn-success btn-simple btn-xs">
                                            <i class="material-icons">mode_edit</i>
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

                    {{ $categories->links() }} <!-- Paginación de productos-->
                </div>
            </div>

        </div>


    </div>

</div>

</div>

@include ('includes.footer')
@endsection