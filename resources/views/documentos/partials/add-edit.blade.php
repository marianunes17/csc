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
    <label for="inputTipo">Tipo</label>
    <select name="tipo" id="inputTipo" class="form-control">
        @foreach ($tipos as $tipo)
        <option {{ old('$tipo', $documento->tipo_id) == $tipo->id ? "selected":""}} value="{{$tipo->id}}" >{{$tipo->name}}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <label for="inputDate">Data</label>
    <input type="date" class="form-control" name="data" id="inputDate"
        value="{{old('data',$documento->data??date('Y-m-d'))}}"/>
</div>
