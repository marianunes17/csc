<div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" name="name" id="inputName"
    value="{{old('name',$eventos->name)}}" />
    <!--Old - Se der erro vai mostrar o que estava no antigo-->
</div>
<div class="form-group">
    <label for="inputDescription">Description</label>
    <textarea class="form-control" name="description" id="inputDescription">{{old('description',$eventos->description)}}</textarea>
</div>
