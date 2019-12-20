<div class="form-group">
    <label for="inputNome">Título</label>
    <input type="text" class="form-control" name="titulo" id="inputNome"
        value="{{old('titulo',$parceria->titulo)}}" />
</div>

<div class="form-group">
    <label for="inputDescricao">Descrição</label>
    <textarea class="form-control" name="descricao"
        id="inputDescricao">{{old('descricao',$parceria->descricao)}}</textarea>
</div>

<div class="form-group">
    <label for="inputImagem">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImagem"
        aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">
        Please upload a valid file imagem. Size of imagem should not be more than
        2MB </small>
</div>
