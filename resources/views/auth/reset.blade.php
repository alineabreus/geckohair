@extends('auth.template')

@section('title') Inserir nova senha @endsection

@section('form')
    <form class="form" action="{{route('password.update', $token)}}" method="POST">
        @csrf
        <!--begin::Title-->
        <div class="pb-5 pb-lg-15">

            <p class="text-muted font-weight-bold font-size-h4">Preencha os seguintes campos para recuperar sua senha</p>
        </div>
        <!--end::Title-->
        <!--begin::Form group-->
        <input type="hidden" name="token" value="{{$token}}">
        <div class="form-group">
            <input class="au-input au-input--full" type="email"
                   placeholder="Email" name="email" autocomplete="off"/>
        </div>
        <div class="form-group">
            <input class="au-input au-input--full" type="password"
                   placeholder="Senha" name="password" autocomplete="off"/>
        </div>
        <div class="form-group">
            <input class="au-input au-input--full" type="password"
                   placeholder="Confirmar Senha" name="password_confirmation" autocomplete="off"/>
        </div>
        <!--end::Form group-->
        <!--begin::Form group-->
        <div class="form-group d-flex flex-wrap">
            <button type="submit"
                    class="au-btn au-btn--block au-btn--green m-b-20">Enviar
            </button>
            <a href="{{route('login')}}" id="kt_login_forgot_cancel"
               class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancelar</a>
        </div>
        <!--end::Form group-->
    </form>
@endsection
