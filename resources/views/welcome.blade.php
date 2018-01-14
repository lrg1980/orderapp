@extends('layouts.app')

@section('body-class', 'landing-page')
@section('title', 'Bienvenido a  ' . config('app.name'))

@section('styles')
<style>
    .team .row .team-player {
        margin-bottom: 4em;
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
// Actualización de estilos de TypeAhead
    .tt-query {
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
         -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
              box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    }

    .tt-hint {
      color: #999
    }

    .tt-menu {    /* used to be tt-dropdown-menu in older versions */
      width: 222px;
      margin-top: 4px;
      padding: 4px 0;
      background-color: #fff;
      border: 1px solid #ccc;
      border: 1px solid rgba(0, 0, 0, 0.2);
      -webkit-border-radius: 4px;
         -moz-border-radius: 4px;
              border-radius: 4px;
      -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
         -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
              box-shadow: 0 5px 10px rgba(0,0,0,.2);
    }

    .tt-suggestion {
      padding: 3px 20px;
      line-height: 26px;
    }

    .tt-suggestion.tt-cursor,.tt-suggestion:hover {
      color: #fff;
      background-color: #0097cf;

    }

    .tt-suggestion p {
      margin: 0;
    }
</style>
@endsection

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Bienvenido a Order APP</h1>
                <h4>La app web para la venta de sus productos. Simple y rápido</h4>
                <br />
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
                    <i class="fa fa-play "></i>¿Como funciona?
                </a>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center section-landing">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="title">¿Porqué elegirnos?</h2>
                    <h5 class="description">Somos la única aplicación creada para que usted venda y los usuarios compren de la mejor forma y simple posible. No tenemos competencia, somos uno más del montón, con calidad y compromiso.</h5>
                </div>
            </div>

            <div class="features">
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="info">
                            <div class="icon icon-primary">
                                <i class="material-icons">chat</i>
                            </div>
                            <h4 class="info-title">Atendemos dudas en tiempo real</h4>
                            <p>Tenemos nuestra plataforma desarrollada con un chat en tiempo real, combinando usuario-app, app-cliente y usuario-cliente</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">verified_user</i>
                            </div>
                            <h4 class="info-title">Pago Seguro</h4>
                            <p>Ofrecemos métodos de pagos confiables y seguros de acuerdo al mercado actual. Permanentemente estamos incluyendo nuevas empresas. MercadoPago, TodoPago, PayU, Stripe y ahora Paypal</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="material-icons">fingerprint</i>
                            </div>
                            <h4 class="info-title">Información privada</h4>
                            <p>Su información no será distribuida ni utilizada por OrderApp ni ninguna empresa con relación con OrderApp. Somos transparente y el resguardo de tus datos, es una prioridad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Formulario Search-->
            <div class="section text-center">
                <h2 class="title">
                    <form action="{{ url('/search') }}" class="form-inline" method="get">
                        <input type="text" placeholder="¿Qué producto buscas?" class="form-control" name="query" id="search">
                        <button type="submit" class="btn btn-primary btn-just-icon"><i class="material-icons">search</i> Buscar</button>
                    </form>
                </h2>
            </div>
        <div>
            
        </div>
        <div class="section text-center">
            <h2 class="title">Nuestras Categorias</h2>

            <div class="team">
                <div class="row">
                    @foreach ($categories as $category)
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="team-player">
                            <img src="{{$category->featured_image_url }}" alt="Imagen de la categoría {{$category->name }}" class="img-raised img-circle">
                            <h4 class="title">
                                <a href="{{url('/categories/'.$category->id) }}">{{ $category->name }}</a> <br />
                                <small class="text-muted">
                                    {{ $category->category_name}}</small>
                            </h4>
                            <p class="description">{{ $category->description}} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

       {{-- <div class="section text-center">
            <h2 class="title">Productos disponibles</h2>

            <div class="team">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="team-player">
                            <img src="{{$product->featured_image_url }}" alt="Thumbnail Image" class="img-raised img-circle">
                            <h4 class="title">
                                <a href="{{url('/products/'.$product->id) }}">{{ $product->name }}</a> <br />
                                <small class="text-muted">
                                    {{ $product->category_name}}</small>
                            </h4>
                            <p class="description">{{ $product->description}} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center">
                    {{ $products->links() }}
                </div>

            </div>

        </div> --}}


        <div class="section landing-section">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center title">Quieres conocernos más?</h2>
                    <h4 class="text-center description">Contactanos en forma rápida con un mensaje y estaremos a gusto de responderte a la mayor brevedad posible.</h4>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre y Apellido</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Correo Electrónico</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group label-floating">
                            <label class="control-label">Mensaje</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <button class="btn btn-primary btn-raised">
                                    Enviar consulta
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>

@include('includes.footer')

@endsection

@section('scripts')
    <script src="{{ asset('/js/typeahead.bundle.min.js') }}"></script>
    <script>
        $(function() {
            // Iniciar el motor de búsqueda
            // constructs the suggestion engine
                var products = new Bloodhound ({
                  datumTokenizer: Bloodhound.tokenizers.whitespace,
                  queryTokenizer: Bloodhound.tokenizers.whitespace,
                  // `products` is an array of product names 
                  prefetch: '{{ url('/products/json') }}'
                });

            // inicializar typeahead sobre nuestro input de búsqueda
                $('#search').typeahead({
                    hint: true,
                    highlight: true,
                    minLenght: 1
                }, {
                    name: 'products',
                    source: products
                });
            });
    </script>
@endsection
