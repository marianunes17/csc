<div class="form-group">
    <label for="inputNome">Nome</label>
    <input type="text" class="form-control" name="nome" id="inputNome"
    value="{{old('nome',$tipo->nome)}}" />
    <!--Old - Se der erro vai mostrar o que estava no antigo-->
</div>

<div class="form-group">
    <label for="inputDescricao">Descrição</label>
    <textarea class="form-control" name="descricao" id="inputDescricao">{{old('descricao',$tipo->descricao)}}</textarea>
</div>

<div class="form-group">
    <label for="inputTipo">Tipo</label>
    <select name="tipo" id="inputTipo" class="form-control">
        <option value="" selected>Tipo pai</option>
        @foreach ($tipos as $tipo_)
        <option {{ old('$tipo', $tipo->tipo_id) == $tipo_->id ? "selected":""}} value="{{$tipo_->id}}" >{{$tipo_->nome}}</option>
        @endforeach
    </select>
</div>
