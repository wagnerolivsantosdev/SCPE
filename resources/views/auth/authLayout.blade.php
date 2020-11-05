<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('node_modules/animate.css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('node_modules/click-tap-ripple-effect/dist/css/ripple-effect.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
</head>

<body id="particles">    

    <div class="intro">
        <div class="wrapper-auth d-flex justify-content-center align-items-center flex-column">
            @include('layouts.partials.message')
            <div class="row no-gutters wrapper-auth-login">
                <div class="col col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto">
                    <div class="card card-auth-login">
                        <div class="card-body">
                            <header class="form-header-login">
                                <h3 class="text-white">@yield('title')</h3>
                            </header>

                            <hr class="line-auth-login m-0">

                            @yield('content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   

{{-- SCRIPTS --}}
<script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('node_modules/@popperjs/core/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('node_modules/click-tap-ripple-effect/dist/js/ripple-effect.min.js') }}"></script>
<script src="{{ asset('node_modules/jquery-particleground/jquery.particleground.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
