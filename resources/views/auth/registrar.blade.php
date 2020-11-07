@extends('Auth.authLayout')

@section('title')
    Registrar
@endsection

@section('content')

    <form method="post" class="mt-3">
        @csrf

        <div class="form-group">
            <label for="name" class="label-register-name">Nome</label>
            <input type="text" id="name" name="name" required class="form-control">
        </div>

        <div class="form-group">
            <label for="email" class="label-register-email">E-mail</label>
            <input type="email" id="email" name="email" required class="form-control">
        </div>

        <div class="form-group">
            <label for="password" class="label-register-password">Senha</label>
            <input type="password" id="password" name="password" required min="1" class="form-control">
        </div>

        <div class="row  col-12 p-0 mt-4 mb-3 no-gutters d-flex justify-content-between">
            <div class="col-12 col-sm-4 d-flex align-items-center mb-2">
                <button type="submit" class="btn btn-primary btn-entrar">
                    Registrar
                </button>
            </div>

            <div class="col-12 col-sm-4 d-flex align-items-center mb-2">
                <a href="{{ route('login') }}" class="btn btn-danger btn-registrar">
                    Cancelar
                </a>
            </div>
        </div>

    </form>

@endsection
