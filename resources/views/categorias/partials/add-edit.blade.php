<div class="form-group">
    <label for="inputNome">Nome</label>
    <input type="text" class="form-control" name="nome" id="inputNome"
    value="{{old('nome',$categoria->nome)}}" />
    <!--Old - Se der erro vai mostrar o que estava no antigo-->
</div>

<div class="form-group">
    <label for="inputDescricao">Descrição</label>
    <textarea class="form-control" name="descricao" id="inputDescricao">{{old('descricao',$categoria->descricao)}}</textarea>
</div>

<div class="form-group">
    <label for="inputCategoria">Categoria</label>
    <select name="categoria" id="inputCategoria" class="form-control">
        <option value="" selected>Categoria pai</option>
        @foreach ($categorias as $categoria_)
        <option {{ old('$categoria', $categoria->categoria_id) == $categoria_->id ? "selected":""}} value="{{$categoria_->id}}" >{{$categoria_->nome}}</option>
        @endforeach
    </select>
</div>
