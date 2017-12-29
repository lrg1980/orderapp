@extends('layouts.app')

@section('content')
    @section('body-class', 'signup-page')
@section('title', 'Ingresar' . ' ' . '|'.' ')

@section('content')
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('{{asset('/img/city.jpg')}}'); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">
                            <!--Inicio Formulario-->
                            <form class="form" method="POST" action="{{ route('register') }}" autocomplete="off">
                                {{ csrf_field() }}
                                <div class="header header-primary text-center">
                                    <h4>Registro</h4>
                                    <div class="social-line">
                                        <a href="#" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="text-divider">Completá tus datos</p>
                                <div class="content">
                                     <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Nombre..." name="name" value="{{ old('name') }}">
                                    </div> 
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus  placeholder="Correo Electrónico...">
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña..."  />
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input id="password" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar contraseña..."  />
                                    </div>

                                    <!-- If you want to add a checkbox to this form, uncomment this code-->

                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-simple btn-primary btn-lg">Confirmar registro</button>
                                    {{-- <<a href="#pablo" class="btn btn-simple btn-primary btn-lg">Ingresar</a>
                                </div>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                                </a> --}}
                            </form>
                            <!-- /Fin Formulario -->
                        </div>
                    </div>
                </div>
            </div>

            @include('includes.footer')

        </div>

    </div>

@endsection
