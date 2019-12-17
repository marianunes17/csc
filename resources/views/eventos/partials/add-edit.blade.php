<div class="form-group">
    <label for="inputNome">Titulo</label>
    <input type="text" class="form-control" name="nome" id="inputNome"
        value="{{old('nome',$eventos->nome)}}" />
</div>

<div class="form-group">
    <label for="inputDescricao">descricao</label>
    <textarea class="form-control" name="descricao"
        id="inputDescricao">{{old('descricao',$eventos->descricao)}}</textarea>
</div>

<div class="form-group">
    <label for="inputImagem">imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImagem"
        aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">
        Please upload a valid file imagem. Size of imagem should not be more than
        2MB </small>
</div>

<div class="form-group">
    <label for="inputCategory">Categoria</label>
    <select name="category" id="inputCategory" class="form-control">
        @foreach ($categories as $category)
        <option {{ old('$category', $eventos->category_id) == $category->id ?
            "selected":""}}
            value="{{$category->id}}" >{{$category->name}}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <label for="inputDate">Date</label>
    <input type="datetime_local" class="form-control" name="data" id="inputDate"
        value="{{old('date',$eventos->date??date("d-m-Y"))}}"/>
</div>
