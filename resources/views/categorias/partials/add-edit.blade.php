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
