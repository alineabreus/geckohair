@extends('layouts.master')

@section('title')
    Funcionários
@endsection

@section('page-title')
    Atualização de Dados de Funcionário
@endsection

@section('page-content')

    <div class="col-lg-12">
        <form action="{{route('users.edit', $user->id)}}" method="post">
            @csrf
        <div class="card">
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="company" class=" form-control-label">Nome</label>
                    <input type="text" name="name" value="{{$user->name}}" placeholder="Digite o nome aqui" class="form-control">
                </div>
                <div class="form-group">
                    <label for="vat" class=" form-control-label">E-mail</label>
                    <input type="text" name="email" value="{{$user->email}}" placeholder="email@email.com" class="form-control">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Telefone</label>
                                <input type="text" name="phone" value="{{$user->employee->phone}}" placeholder="(99) 9999-9999" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Mobile</label>
                                <input type="text" name="mobile" value="{{$user->employee->mobile}}" placeholder="(99) 99999-9999" class="form-control">
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
                                    <option @if($user->employee->user_role_id === 1) selected @endif value="1">Gerente</option>
                                    <option @if($user->employee->user_role_id === 2) selected @endif value="2">Cabeleireiro</option>
                                    <option @if($user->employee->user_role_id === 3) selected @endif value="3">Cadastrador</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Salário</label>
                                <input type="text" value="{{$user->employee->salary}}" name="salary" placeholder="Informe o salário deste funcionário" class="form-control">
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
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">atualizar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </form>
    </div>

@endsection
