<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="name" id="inputName"
    value="{{old('name',$tipo->name)}}" />
    <!--Old - Se der erro vai mostrar o que estava no antigo-->
</div>

<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control" name="description" id="inputDescription">{{old('description',$tipo->description)}}</textarea>
</div>

<div class="form-group">
    <label for="inputTipo">Tipo</label>
    <select name="tipo" id="inputTipo" class="form-control">
        <option value="" selected>Tipo pai</option>
        @foreach ($tipo as $tipo_id)
        <option {{ old('$tipo_id', $tipo->tipo_id) == $tipo->id ? "selected":""}} value="{{$tipo->id}}" >{{$tipo->name}}</option>
        @endforeach
    </select>
</div>
