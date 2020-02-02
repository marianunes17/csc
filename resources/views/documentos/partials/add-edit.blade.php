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
    <label for="inputFile">Documento</label>
    <input type="file" class="form-control-file" name="file" id="inputFile"
        aria-describedby="fileHelp"/>
    <small id="fileHelp" class="form-text text-muted">
        O tamanho da file não deve exceder 2 MB </small>
</div>

<div class="form-group">
    <label for="inputTipo">Categoria do documento</label>
    <select name="tipo" id="inputTipo" class="form-control">
        @foreach ($tipos as $tipo)
        <option {{ old('$tipo', $documento->tipo_id) == $tipo->id ? "selected":""}} value="{{$tipo->id}}" >{{$tipo->nome}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="inputDate">Data</label>
    <input type="date" class="form-control" name="data" id="inputDate"
        value="{{old('date',$documento->date??date('Y-m-d'))}}"/>
</div>
