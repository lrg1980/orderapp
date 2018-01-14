@extends('layouts.app')

@section('body-class', 'profile-page')
@section('title', 'Resultados de Búsqueda'. '|'.' ')

 @section('styles')
    <style>
         .team {
            padding-bottom: 50px;
        }
        .team .row .col-md-4 {
            margin-bottom: 5em;
        }
        .team .row {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display:         flex;
          flex-wrap: wrap;
        }
        .team .row > [class*='col-'] {
          display: flex;
          flex-direction: column;
        }
        .no-margin {
            margin: 0;
        }
        .team .team-player .title {
            margin-bottom: 0.5em;
        }
    </style>
 @endsection

@section('content')

        <div class="header header-filter" style="background-image: url('/img/examples/city.jpg');"></div>

<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="profile">
                    <div class="avatar">

                        <img src="/img/buscar.png" alt=">" alt="Imagen de la lupa de resultados"     class="img-circle img-responsive img-raised">
                    </div>

                    <div class="name">
                        <h3 class="title">Resultados de búsqueda</h3>                        
                    </div>
                </div>
            </div>
            @if (session('notifications'))
                <div class="alert alert-success">
                    {{ session('notifications') }}
                </div>
            @endif
        </div>
    </div>
    <div class="description text-center">
        <p>Se encontraron {{ $products->count() }} resultados para el término {{ $query }}</p>
     </div>

          {{--   <div class="text-center">
                <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#modalAddToCart">
                    For modern browsers.
                    <i class="material-icons">add_shopping_cart</i> Añadir al carrito
                </button>
            </div> --}}
            <!-- Button trigger modal -->
    
            <div class="team text-center">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="team-player"> 
                            <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-raised img-circle">
                            <h4 class="title">
                                <a href="{{ url('/products/'.$product->id) }}">{{ $product->name }}</a> 
                                <br />                                
                            </h4>
                            <p class="description">{{ $product->description }} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center">
                    {{ $products->links() }}
                </div>

            </div>
        </div>
    </div>
</div>   

@include('includes.footer')
@endsection