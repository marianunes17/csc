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
    <label for="inputCategory">Category</label>
    <select name="category" id="inputCategory" class="form-control">
        <option value="" selected>Category pai</option>
        @foreach ($categories as $category_)
        <option {{ old('$category', $category->category_id) == $category_->id ? "selected":""}} value="{{$category_->id}}" >{{$category_->name}}</option>
        @endforeach
    </select>
</div>
