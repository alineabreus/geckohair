@extends('layouts.master')

@section('title')
    Funcionários
@endsection

@section('page-title')
    Lista de Funcionários Cadastrados
@endsection

@section('page-content')
    <div class="col-lg-12">
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
                        <td>
                            <a href="{{route('home')}}"><i class="fa fa-pencil-alt"></i></a>
                        </td>
                        <td>
                            <a href="{{route('users.delete', $employee->user->email)}}"><i class="fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
