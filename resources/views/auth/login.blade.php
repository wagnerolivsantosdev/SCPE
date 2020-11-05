@extends('Auth.authLayout')

@section('title')
    Login
@endsection

@section('content')
    <form method="post" class="mt-3 container">
        @csrf
        <div class="form-group">
            <label for="email" class="m-0 label-auth-user">Usuário</label>
            <div class="row no-gutters">
                <div class="col-2 form-icon text-white d-flex justify-content-center orange-gradient">
                    <i class="d-flex align-items-center fas fa-user"></i>
                </div>
                <div class="col">
                    <input type="email" id="email" name="email" required placeholder="Usuário">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="m-0 label-auth-password">Senha</label>
            <div class="row no-gutters">
                <div class="col-2 form-icon text-white d-flex justify-content-center orange-gradient">
                    <i class="d-flex align-items-center fas fa-lock"></i>
                </div>
                <div class="col">
                    <input type="password" id="password" name="password" required min="1" placeholder="Senha">
                </div>
            </div>

        </div>

        <div class="row  col-12 p-0 mt-4 mb-3 no-gutters d-flex justify-content-between">
            <div class="col-12 col-sm-4 d-flex align-items-center mb-2">
                <button type="submit" class="btn btn-primary btn-entrar">
                    Entrar
                </button>
            </div>

            <div class="col-12 col-sm-4 d-flex align-items-center mb-2">
                <a href="{{ route('registrar') }}" class="btn btn-warning btn-registrar">
                    Registrar
                </a>
            </div>
        </div>
    </form>
@endsection
