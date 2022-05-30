@extends('auth.template')

@section('form')
    <!--begin::Form-->
    <form class="form" action="{{route('password.email')}}" method="POST">
        @csrf
        <!--begin::Title-->
        <div class="pb-5 pb-lg-15">
            <h3 class="text-center font-weight-bolder font-size-h2 font-size-h1-lg">Esqueceu sua
                senha?</h3>
            <p class="text-center font-weight-medium font-size-h4 light-text">Digite seu e-mail para recuperar sua senha</p>
        </div>
        <!--end::Title-->
        <!--begin::Form group-->
        <div class="form-group">
            <label>Endereço de e-mail</label>
            <input class="au-input au-input--full" type="email"
                   placeholder="Email" name="email" autocomplete="off"/>
        </div>
        <br>
        <!--end::Form group-->
        <!--begin::Form group-->
        <div class="form-group d-flex flex-wrap">
            <button type="submit"
                    class="au-btn au-btn--block au-btn--green m-b-20">Enviar
            </button>
            <a href="{{route('login')}}" id="kt_login_forgot_cancel"
               class="btn btn-light-primary font-weight-bolder font-size-h6 btn-block px-8 py-4 my-3">Cancelar</a>
        </div>
        <!--end::Form group-->
    </form>
    <!--end::Form-->
@endsection
