<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrar</title>
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
</head>
<body>

    <div class="container mt-2">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" class="mt-2">
            @csrf
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" required min="1" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary mt-3">
                Entrar
            </button>

            <a href="{{ route('registrar') }}" class="btn btn-secondary mt-3">
                Registrar-se
            </a>

        </form>
    </div>    

    <!-- Scripts -->
    <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('node_modules/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    
</body>
</html>