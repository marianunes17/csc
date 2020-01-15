@extends("layout.master")

@section("title", "Contactos")

@section("content")

@include ('layout.partials.banner')
@if (!empty(session('success')))
@include ('partials.success')
@endif
<section class="bar">
    <div class="container">
        <p class="lead text-center">O Centro Social de Carnide põe ao seu dispor contactos para que possa colocar todas
            as
            questões
            de uma forma rápida e directa. Estamos abertos a qualquer dúvida ou sugestão. Para isso basta
            enviar-nos um
            e-mail ou preencher o formulário a baixo.</p>
    </div>
</section>
<section>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="box-simple">
                    <div class="icon-outlined"><i class="fa fa-map-marker"></i></div>
                    <h3 class="h4">Morada</h3>
                    <p>Travessa da fonte nº4, junto ao Centro Escolar<br> Portugal, <strong>Pombal/Carnide</strong></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-simple">
                    <div class="icon-outlined"><i class="fa fa-phone"></i></div>
                    <h3 class="h4">Contacto Telefnico</h3>
                    <p>Este contacto encontra-se disponivel 24 horas por dia. Não hesite em contactar. </p>
                    <p><strong>Telemóvel: 968 415 877 </strong> <br> <strong> Telefone: 236 946 189</strong></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-simple">
                    <div class="icon-outlined"><i class="fa fa-envelope"></i></div>
                    <h3 class="h4">E-mail</h3>
                    <p>Não hesite em contactar via email caso tenha alguma questão.</p>
                    <ul class="list-unstyled text-sm">
                        <li><strong><a href="mailto:">cacddjm@gmail.com</a></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bar mt-5">
    <div class="heading text-center">
        <h2>Localização</h2><br><br>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1530.6840925025829!2d-8.730496713075222!3d39.888388229661466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd226eb82eaf26a3%3A0x80a58f4dfc8f8f28!2sCentro%20Social%20de%20Carnide!5e0!3m2!1sen!2spt!4v1575157862156!5m2!1sen!2spt"
            width="100%" height="450" frameborder="0" style="border:0;" class="p-0 m-0"></iframe>
    </div>
</section>

<section class="bar pt-0">
    <div class="row">
        <div class="col-md-12">
            <div class="heading text-center">
                <h2>Formulário de Contacto</h2>
            </div>
        </div>
        <div class="col-md-8 mx-auto" id="zonaContactos">
            @if ($errors->any())
                @include ('partials.errors')
                @endif
            <form method="post" action="{{route('contactos.store')}}">
                @csrf
                @method('post')
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nome"></label>
                            <input id="nome" type="text" class="form-control" placeholder="Nome" value="{{old('nome')}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="asssunto"></label>
                            <input id="assunto" type="text" class="form-control" placeholder="Assunto" value="{{old('assunto')}}">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="email"></label>
                            <input id="email" type="text" pattern="^([\w\.\-]+)@([\w\-]+).(((\w){2,})+)$"
                                data-type="email" class="form-control" placeholder="E-mail" value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="mensagem"></label>
                            <textarea id="mensagem" class="form-control" placeholder="Escreva a sua questão!">{{old('mensagem')}}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-template-outlined"><i class="fa fa-envelope-o"></i>
                            Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>





@endsection
