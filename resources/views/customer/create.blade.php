@extends('layouts.master')

@section('title')
    Clientes
@endsection

@section('page-title')
    Cadastro de Clientes
@endsection

@section('page-content')

    <div class="col-lg-12">
        <form action="{{route('customers.store')}}" method="post">
            @csrf
        <div class="card">
            <div class="card-body card-block">
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Nome</label>
                                <input type="text" name="name" placeholder="Digite o nome aqui" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Observação</label>
                                <input type="text" name="observacao" placeholder="Escreva a observação aqui" class="form-control">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Aniversário</label>
                                <input type="text" name="birthday" placeholder="XX/XX/XXXX" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Cidade</label>
                                <input type="text" name="city" placeholder="Informe a cidade" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Bairro</label>
                                <input type="text" name="district" placeholder="Informe o bairro" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Rua</label>
                                <input type="text" name="street" placeholder="Informe a rua" class="form-control">
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Nº</label>
                                <input type="text" name="number" placeholder="Informe o nº" class="form-control">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Complemento</label>
                                <input type="text" name="comp" placeholder="Informe o complemento" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">E-mail</label>
                                <input type="text" name="email" placeholder="email@email.com" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Telefone</label>
                                <input type="text" name="phone" placeholder="(99) 9999-9999" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Mobile</label>
                                <input type="text" name="mobile" placeholder="(99) 99999-9999" class="form-control">
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
