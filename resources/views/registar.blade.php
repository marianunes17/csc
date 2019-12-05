@extends("layout.master")

@section("title", "Registo")

@section("content")

@include ('layout.partials.banner')

<div class="container">

        <div class="row justify-content-center">
                <div class="col-md-6">

                        <h3 class="card-title text-center">Registe-se aqui!</h3>


                        <form class="form-signin">
                          <div class="form-label-group">
                            <label for="inputUserame">Nome</label>
                            <input type="text" id="inputUserame" class="form-control" required autofocus>
                          </div>

                          <br>

                          <div class="form-label-group">
                            <label for="inputEmail">E-mail</label>
                            <input type="email" id="inputEmail" class="form-control" required>

                          </div>

                          <br>

                          <div class="form-label-group">
                              <label for="inputPassword">Password</label>
                            <input type="password" id="inputPassword" class="form-control"  required>

                          </div>

                          <br>

                          <div class="form-label-group">
                              <label for="inputConfirmPassword">Confirmação de password</label>
                            <input type="password" id="inputConfirmPassword" class="form-control"  required>

                          </div>

                          <br>

                          <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registar</button>
                          <br>
                          <h5 class="d-block text-center mt-2 small">Já tem uma conta?</h5><a class="d-block text-center mt-2 small" href="#">Log In</a>

                          <br>

                        </form>
                      </div>
                    </div>
                  </div>
                </div>
        </div>

</div>




@endsection
