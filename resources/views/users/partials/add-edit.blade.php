<div class="form-group">
<label for="inputFullname">Nome</label>
<input type="text" class="form-control" name="name" id="inputFullname"
value="{{old('name',$user->name)}}" />
</div>

<div class="form-group">
<label for="inputEmail">Email</label>
<input type="text" class="form-control" name="email" id="inputEmail"
placeholder="exemplo@gmail.com" value="{{old('email',$user->email)}}" />
</div>


@can("updateRole",$user)
<div class="form-group">
    <label for="inputRole">Tipo de Utilizador</label>
    <select name="role" id="inputRole" class="form-control">
        <option {{old('role',$user->role)=='Administrador'?"selected":""}} value="Administrador">Administrador</option>
        <option {{old('role',$user->role)=='Normal'?"selected":""}} value="Normal">Normal</option>
    </select>
</div>
@endcan

