<div class="form-group">
    <label for="inputNome">Nome</label>
    <input type="text" class="form-control" name="titulo" id="inputNome"
        value="{{old('titulo',$equipa->titulo)}}" />
</div>

<div class="form-group">
    <label for="inputNome">Cargo</label>
    <input type="text" class="form-control" name="cargo" id="inputCargo"
        value="{{old('cargo',$equipa->cargo)}}" />
</div>

<div class="form-group">
    <label for="inputDescricao">Descrição</label>
    <textarea class="form-control" name="descricao"
        id="inputDescricao">{{old('descricao',$equipa->descricao)}}</textarea>
</div>

<div class="form-group">
    <label for="inputImagem">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImagem"
        aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">
        Por favor, adicione uma imagem válida. O tamanho da imagem não deve de ser maior do que 2MB </small>
</div>
