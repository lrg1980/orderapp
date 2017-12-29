@extends('layouts.app')

@section('body-class', 'landing-page')
@section('title', 'Bienvenido' . ' ' . '|'.' ')

@section('styles')
<style>
    .team .row .team-player {
        margin-bottom: 4em;
    }

    .row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display:         flex;
  flex-wrap: wrap;
}
.row > [class*='col-'] {
  display: flex;
  flex-direction: column;
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

        <div class="section text-center">
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
                                    {{ $product->category->name}}</small>
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

        </div>


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

<footer class="footer">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="http://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="http://presentation.creative-tim.com">
                       About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                       Blog
                    </a>
                </li>
                <li>
                    <a href="http://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; 2016, made with <i class="fa fa-heart heart"></i> by Creative Tim
        </div>
    </div>
</footer>

</div>

@endsection
