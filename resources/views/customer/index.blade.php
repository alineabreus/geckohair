@extends('layouts.master')

@section('title')
    Clientes
@endsection

@section('page-title')
    Lista de Clientes Cadastrados
@endsection

@section('page-content')
    <div class="col-lg-12">

        <div class="form-group">
            <div class="row">
                <div class="col-10">
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <a class="au-btn au-btn--block au-btn--green m-b-20" href="{{route('customers.create')}}"><button class="au-btn au-btn--block au-btn--green m-b-20">cadastrar</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Cargo</th>
                    <th>Salário</th>
                    <th>Celular</th>
                    <th>Alterar</th>
                    <th>Remover</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->user->email ?? null}}</td>
                        <td>{{$employee->role->title}}</td>
                        <td>{{$employee->salary}}</td>
                        <td>{{$employee->mobile}}</td>
                        <td class="text-center">
                            <a href="{{route('customers.edit', $employee->user->id)}}"><i class="fa fa-pencil-alt"></i></a>
                        </td>
                        <td class="text-center">
                            <a style="color:red;" href="{{route('customers.delete', $employee->user->email)}}"><i class="fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
