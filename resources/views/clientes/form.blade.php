<div class="row">
        <div class="col-12">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="" class="form-control" value="{{($cliente-> nome)}}">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="" class="form-control" value="{{($cliente-> email)}}">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="" class="form-control" value="{{($cliente-> cpf)}}">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="" class="form-control" value="{{($cliente-> endereconpm ru)}}">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" id="" class="form-control" value="{{($cliente-> bairro)}}">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="" class="form-control" value="{{($cliente-> cidade)}}">
        </div>
    
        <div class="col-6">
            <label for="uf">UF:</label>
            <input type="text" name="uf" id="" class="form-control" value="{{($cliente-> uf)}}">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="" class="form-control" value="{{($cliente-> telefone)}}">
        </div>
    

    @if(isset($cliente))
    <div class="col-6">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="" class="form-control">
    </div>
    </div>
    @endif
    

    <div class="row">
            <div class="row" style="margin-top: 10px">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ route('clientes.index') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </div>


