<div class="form-group">
    <label for="inputNome"><strong>Nome</strong></label>
    <input type="text" class="form-control" name="nome" id="inputNome"
        value="{{old('nome',$testemunho->nome)}}" />
</div>

<div class="form-group">
    <label for="inputNome"><strong>Sobrenome</strong></label>
    <input type="text" class="form-control" name="sobrenome" id="inputNome"
        value="{{old('sobrenome',$testemunho->sobrenome)}}" />
</div>

<div class="form-group">
    <label for="inputNome"><strong>Email</strong></label>
    <input type="text" class="form-control" name="email" id="inputNome"
        value="{{old('email',$testemunho->email)}}" />
</div>

<div class="form-group">
    <label for="inputNome"><strong>Testemunho</strong></label>
    <textarea class="form-control" name="testemunho" id="inputNome">{{old('testemunho',$testemunho->testemunho)}} </textarea>
</div>




