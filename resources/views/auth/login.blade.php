@extends('auth.template')

@section('title') Login @endsection

@section('form')
    <form action="{{route('authenticate')}}" method="post">
        @csrf

        <div class="form-group">
            <label>Endereço de e-mail</label>
            <input class="au-input au-input--full" type="email" name="email" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input class="au-input au-input--full" type="password" name="password" placeholder="Senha">
        </div>
        <div class="login-checkbox">
            <label>
                <input type="checkbox" name="remember">Me lembre
            </label>
            <label>
                <a href="{{route('password.request')}}">Esqueceu sua senha?</a>
            </label>
        </div>
        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">entrar</button>
    </form>
@endsection
