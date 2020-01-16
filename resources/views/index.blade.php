@extends("layout.master")

<!-- nome da pasta e ponto
significa q extende a view master -->

@section("title", "Centro Social de Carnide")

@section("content")
 @if (!empty(session('success')))
@include ('partials.success')
@endif
<section style="background: url('img/centrocrs.jpg') center center repeat; background-size: cover;"
    class="bar background-white relative-positioned">
    <div class="container">
        <div class="home-carousel">
            <div class="dark-mask mask-primary"></div>
            <div class="container">
                <div class="homepage owl-carousel">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-5 text-right">
                                <h1>CENTRO DE DIA</h1>
                                <p>+ Conforto<br>+ companhia<br>+ ativades<br> Venha visitar-nos!</p>
                            </div>
                            <div class="col-md-7"><img src="img/centrodia.png" alt="" class="img-fluid"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-7 text-center"><img src="img/centrodia2.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-5">
                                <h2>LAR</h2>
                                <p>O nosso centro dá as<br> melhores codições<br> as pessoas mais necessitada!</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-5 text-right">
                                <h1>CRECHE</h1>
                                <p>O futuro das vossas crianças<br>começa aqui no CSC!</p>
                            </div>
                            <div class="col-md-7"><img src="img/creche.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bar pt-5">
    <div class="container">

        <div class="heading text-center">
            <h2>Serviços</h2>
        </div>
        <p class="lead text-center">O Centro Social de Carnide, proporciona aos nossos utentes um leque de serviços e
            atividades,
            que permite ao mesmo e aos seus familiares estarem descansados.<br>Caso queira saber mais acerca d os nossos
            serviços, clique no botão "Saber mais"!</p>

        <div class="container text-center">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="box-simple">
                        <div><img src="img/erpi.jpeg" alt="" class="img-fluid"></div>
                        <br>
                        <h4 class="h4">ERPI</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-simple">
                        <div><img src="img/centrodia.jpg" alt="" class="img-fluid"></div>
                        <br>
                        <h4 class="h4">CENTRO DE DIA</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-simple">
                        <div><img src="img/sad-01.png" alt="" class="img-fluid"></div>
                        <br>
                        <h4 class="h4">SAD</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-simple">
                        <div><img src="img/crechecrs1.jpg" alt="" class="img-fluid"></div>
                        <br>
                        <h4 class="h4">CRECHE</h4>
                    </div>
                </div>

                <div class="col-sm-12 text-center">
                    <a href="{{route('csc.servicos')}}" class="btn btn-template-outlined" style>Saber mais</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bar background-pentagon no-mb text-md-center">
    <div class="container">
        <div class="heading text-center">
            <h2>Testemunhos</h2>
        </div>
        <p class="lead">Testemunhos mais recentes dos nossos utentes, que comprovam a qualidade dos nossos serviços!</p>
        <ul class="owl-carousel testimonials list-unstyled equal-height">
            @foreach($testemunhos as $testemunho)
            <li class="item">
                <div class="testimonial d-flex flex-wrap">
                    <div class="text">
                        <p>{{$testemunho->testemunho}}</p>
                    </div>
                    <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                            <div class="title">
                                <h5>{{$testemunho->nome}}</h5>
                                <strong>
                                    <p>{{$testemunho->data}}</p>
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>
<section class="bar pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading text-center">
                    <h2>Deixe aqui o seu testemunho</h2>
                </div>
            </div>
            <div class="col-md-8 mx-auto" id="zonaTestemunhos">
                @if ($errors->any())
                @include ('partials.errors')
                @endif
                <form method="post" action="{{route('testemunhos.store')}}">
                    @csrf
                    @method('post')

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nome"></label>
                                <input id="nome" name="nome" type="text" class="form-control" placeholder="Primeiro Nome"
value="{{old('nome')}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="asssunto"></label>
                                <input id="assunto" name="sobrenome" type="text" class="form-control" placeholder="Sobrenome" value="{{old('sobrenome')}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="email"></label>
                                <input id="email" type="email" name="email" class="form-control" placeholder="E-mail" value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message"></label>
                                <textarea id="message" name="testemunho" class="form-control" placeholder="Testemunho">{{old('testemunho')}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 text-right">
                               <button type="submit" class="btn btn-template-outlined"><i class="fa fa-envelope-o"></i>
                                Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="bar bg-gray">
    <div class="container">
        <div class="heading text-center">
            <h2>Parceiros</h2>
        </div>
        <ul class="list-unstyled owl-carousel customers no-mb">
            @foreach ($parcerias as $parceria)
            <li class="item"><img src="{{Storage::disk('public')->url('parceria_images/').$parceria->imagem}}" alt="" class="img-fluid"></li>
            @endforeach
        </ul>
    </div>
</section>

@endsection
