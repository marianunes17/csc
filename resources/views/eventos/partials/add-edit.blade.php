<div class="form-group">
    <label for="inputNome">Título</label>
    <input type="text" class="form-control" name="nome" id="inputNome"
        value="{{old('nome',$evento->nome)}}" />
</div>

<div class="form-group">
    <label for="inputDescricao">Descrição</label>
    <textarea class="form-control" name="descricao"
        id="inputDescricao">{{old('descricao',$evento->descricao)}}</textarea>
</div>

<div class="form-group">
    <label for="inputImagem">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImagem"
        aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">
        O tamanho da imagem não deve exceder 2 MB </small>
</div>

<div class="form-group">
    <label for="inputCategoria">Categoria</label>
    <select name="categoria" id="inputCategoria" class="form-control">
        @foreach ($categorias as $categoria)
        <option {{ old('$categoria', $evento->categoria_id) == $categoria->id ? "selected":""}} value="{{$categoria->id}}" >{{$categoria->nome}}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <label for="inputDate">Data</label>
    <input type="date" class="form-control" name="data" id="inputDate"
        value="{{old('data',$evento->data??date('Y-m-d'))}}"/>
</div>
