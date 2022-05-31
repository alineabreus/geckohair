@extends('layouts.master')

@section('title')
    Serviços
@endsection

@section('page-title')
    Lista de Serviços Cadastrados
@endsection

@section('page-content')
    <div class="col-lg-12">

        <div class="form-group">
            <div class="row">
                <div class="col-10">
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <a class="au-btn au-btn--block au-btn--green m-b-20" href="{{route('users.create')}}"><button class="au-btn au-btn--block au-btn--green m-b-20">cadastrar</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th class="text-center">Alterar</th>
                    <th class="text-center">Remover</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{$service->title}}</td>
                        <td class="text-center">
                            <a href="{{route('users.edit', $service->id)}}"><i class="fa fa-pencil-alt"></i></a>
                        </td>
                        <td class="text-center">
                            <a style="color:red;" href="{{route('users.delete', $service->id)}}"><i class="fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
