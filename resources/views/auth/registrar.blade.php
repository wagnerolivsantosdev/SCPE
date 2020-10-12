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

        <button type="submit" class="btn btn-success mt-3">
            Registrar
        </button>

    </form>

@endsection
