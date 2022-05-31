@extends('layouts.master')

@section('title')
    Funcionários
@endsection

@section('page-title')
    Cadastro de Funcionários
@endsection

@section('page-content')

    <div class="col-lg-12">
        <form action="{{route('users.store')}}" method="post">
            @csrf
        <div class="card">
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="company" class=" form-control-label">Nome</label>
                    <input type="text" name="name" laceholder="Digite o nome aqui" class="form-control">
                </div>
                <div class="form-group">
                    <label for="vat" class=" form-control-label">E-mail</label>
                    <input type="text" name="email" placeholder="email@email.com" class="form-control">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Telefone</label>
                                <input type="text" name="phone" placeholder="(99) 9999-9999" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Mobile</label>
                                <input type="text" name="mobile" placeholder="(99) 99999-9999" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Cargo</label>
                                <select class="form-control" name="role">
                                    <option value="1">Gerente</option>
                                    <option value="2">Cabeleireiro</option>
                                    <option value="3">Cadastrador</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Salário</label>
                                <input type="text" name="salary" placeholder="Informe o salário deste funcionário" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-10">
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </form>
    </div>

@endsection
