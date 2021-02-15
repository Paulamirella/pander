@extends('main')

@section('content')

    <h2>Cadastro de Cliente - Novo cliente</h2>
    <form action="{{route('clientes.store')}}" method="post">
        @csrf
        <div class="row">
        <div class="col-12">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="" class="form-control" value="">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="" class="form-control" value="">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="" class="form-control" value="">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="" class="form-control" value="">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" id="" class="form-control" value="">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="" class="form-control" value="">
        </div>
    
        <div class="col-6">
            <label for="uf">UF:</label>
            <input type="text" name="uf" id="" class="form-control" value="">
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="" class="form-control" value="">
        </div>
    
        <div class="col-6">
            <label for="senha">Senha:</label>
            <input type="text" name="senha" id="" class="form-control" value="">
        </div>
    </div>

    <div class="row" style="margin-top: 10px">
       <div class="col-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ route('clientes.index') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
   

    </form>


@endsection
