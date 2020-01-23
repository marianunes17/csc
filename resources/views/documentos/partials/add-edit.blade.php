<div class="form-group">
    <label for="inputNome">Título</label>
    <input type="text" class="form-control" name="nome" id="inputNome"
        value="{{old('nome',$documento->nome)}}" />
</div>

<div class="form-group">
    <label for="inputDescricao">Descrição</label>
    <textarea class="form-control" name="descricao"
        id="inputDescricao">{{old('descricao',$documento->descricao)}}</textarea>
</div>

<div class="form-group">
    <label for="inputImagem">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImagem"
        aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">
        Please upload a valid file imagem. Size of imagem should not be more than
        2MB </small>
</div>

<div class="form-group">
    <label for="inputCategory">Tipo</label>
    <select name="category" id="inputCategory" class="form-control">
        @foreach ($tipos as $tipo)
        <option {{ old('$tipo', $evento->tipo_id) == $tipo->id ? "selected":""}} value="{{$tipo->id}}" >{{$tipo->name}}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <label for="inputDate">Data</label>
    <input type="date" class="form-control" name="data" id="inputDate"
        value="{{old('data',$documento->data??date('Y-m-d'))}}"/>
</div>
