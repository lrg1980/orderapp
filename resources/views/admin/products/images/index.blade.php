@extends('layouts.app')

@section('body-class', 'product-page')              
@section('title','Imagenes ' . '|'.' ')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Imagenes de producto "{{$product->name}}"</h2>
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form method="post" action="" class="text-center" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="file" name="photo" class="btn btn-warning" required>    
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-default">Subir imagen</button>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ url('/admin/products')}}" class="btn btn-primary btn-round center">Volver al listado</a> 
                                        </div>

                                    </div>
                                </form>  
                            </div>
                        </div>
                    </div>
                </div>
                 
            <div class="row">
                
                @foreach ($images as $image)
                <div class="col-md-4">
                    <hr>
                    <img src="{{ $image->url }}" class="img-thumbnail" width="250px" height="250px">
                    <form method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <input type="hidden" name="image_id" value="{{ $image->id }}">
                        <button type="submit" class="btn btn-danger btn-round">Eliminar</button>
                        @if ($image->featured)
                            <button type="button" class="btn btn-info btn-fab btn-fab-mini btn-round" rel="tooltip" title="Imagen destacada actualmente"><i class="material-icons">favorite</i></a></button>
                        @else
                            <a href="{{ url('/admin/products/'.$product->id.'/images/select/'.$image->id) }}" 
                            class="btn btn-primary btn-fab btn-fab-mini btn-round"><i class="material-icons">favorite</i></a>
                        @endif
                    </form>
                    
                    <hr>
                </div>            
                @endforeach
                
            </div>
               <!-- <img src="..." alt="..." class="img-thumbnail">-->
        </div>
    </div>
</div>

@include ('includes.footer')
@endsection

