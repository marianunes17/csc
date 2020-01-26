<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="name" id="inputName"
    value="{{old('name',$categoria->name)}}" />
    <!--Old - Se der erro vai mostrar o que estava no antigo-->
</div>

<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control" name="description" id="inputDescription">{{old('description',$categoria->description)}}</textarea>
</div>

<div class="form-group">
    <label for="inputCategoria">Categoria</label>
    <select name="categoria" id="inputCategoria" class="form-control">
        <option value="" selected>Categoria pai</option>
        @foreach ($categorias as $categoria_)
        <option {{ old('$categoria', $categoria->categoria_id) == $categoria_->id ? "selected":""}} value="{{$categoria_->id}}" >{{$categoria_->name}}</option>
        @endforeach
    </select>
</div>
