<div class="form-group">
    <label for="inputTitulo">Titulo</label>
    <input type="text" class="form-control" name="Titulo" id="inputTitulo"
    value="{{old('Titulo',$eventos->Titulo)}}" />
    <!--Old - Se der erro vai mostrar o que estava no antigo-->
</div>


<div class="form-group">
    <label for="inputDescricao">Descrição</label>
    <textarea class="form-control" name="descricao" id="inputDescricao">{{old('descricao',$eventos->descricao)}}</textarea>
</div>

<div class="form-group">
    <label for="inputData">Data e hora</label>
    <input type="datetime_local" class="form-control" name="data" id="inputData"
        value="{{old('date',$post->date??date("Y-m-d H:i:s"))}}"/>
        <!--date??date("Y-m-d H:i:s")) - Coloca a data por defeito-->
</div>


<div class="form-group">
    <label for="inputImagem">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImagem"
        aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">
        A imagem não deve ter mais de 2MB </small>
</div>


<div class="form-group">
    <label for="inputCategoria">Categoria</label>
    <select name="categoria" id="inputCategoria" class="form-control" value="{{old('categoria',$eventos->categoria)}}">
            <option value="Projetos"> Projetos </option>
            <option value="Eventos"> Eventos </option>
    </select>
</div>
