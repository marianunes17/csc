<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="name" id="inputName"
    value="{{old('name',$category->name)}}" />
    <!--Old - Se der erro vai mostrar o que estava no antigo-->
</div>

<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control" name="description" id="inputDescription">{{old('description',$category->description)}}</textarea>
</div>

<div class="form-group">
    <label for="inputCategory">Categoria</label>
    <select name="category" id="inputCategory" class="form-control">
        <option value="" selected>Categoria pai</option>
        @foreach ($category as $category_id)
        <option {{ old('$category_id', $category->category_id) == $category->id ? "selected":""}} value="{{$category->id}}" >{{$category->name}}</option>
        @endforeach
    </select>
</div>

