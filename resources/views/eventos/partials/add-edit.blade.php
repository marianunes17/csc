<div class="form-group">
    <label for="inputNome">Título</label>
    <input type="text" class="form-control" name="nome" id="inputNome"
        value="{{old('nome',$evento->nome)}}" />
</div>

<div class="form-group">
    <label for="inputDescricao">Descrição</label>
    <textarea class="form-control" name="descricao"
        id="inputDescricao">{{old('descricao',$evento->descricao)}}</textarea>
</div>

<div class="form-group">
    <label for="inputImagem">Imagem</label>
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
        <option {{ old('$category', $evento->category_id) == $category->id ? "selected":""}} value="{{$category->id}}" >{{$category->name}}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <label for="inputDate">Data</label>
    <input type="date" class="form-control" name="data" id="inputDate"
        value="{{old('data',$evento->data??date('Y-m-d'))}}"/>
</div>
