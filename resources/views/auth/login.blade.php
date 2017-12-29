@extends('layouts.app')

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
                            <form class="form" method="POST" action="{{ route('login') }}" autocomplete="off">
                                {{ csrf_field() }}
                                <div class="header header-primary text-center">
                                    <h4>Ingresar</h4>
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
                                <p class="text-divider">Haga su pedido</p>
                                <div class="content">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus  placeholder="Email...">
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input id="password" type="password" class="form-control" name="password" required placeholder="Password..."  />
                                    </div>

                                    <!-- If you want to add a checkbox to this form, uncomment this code-->

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            Recuerde la sesión
                                        </label>
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-simple btn-primary btn-lg">Ingresar</button>
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


</body>
    <!--   Core JS Files   -->
    <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/material.min.js"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/nouislider.min.js" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="../assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="../assets/js/material-kit.js" type="text/javascript"></script>

</html>

@endsection
