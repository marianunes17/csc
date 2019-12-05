<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('vendor/bootstrap2/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

    <title>Landing Page | Centro Social de Carnide </title>
</head>

<body>
    <section id="one">
        <div class="container py-2">
            <div class="box text-center">

                <img src="img/logos/logo_v.png" alt="logotipo" class="w-25">
                <h1 class="title">Venha festejar o Natal connosco</h1>
                <p class="description font-italic">"Dia <span class="font-weight-bold size">15</span> de dezembro, às
                    <span class="font-weight-bold size">16</span> horas,
                    haverá a festa de Natal da nossa instituição.
                    Apareça, está convidado/a"</p>
                <a href="#" class="btn btn-danger text-white text-uppercase my-5" title="ver site">Visitar</a>
            </div>
        </div>
    </section>
    <section id="two">
        <div class="container">
            <h2 class="coming text-white text-center">Natal CSC está a chegar!</h2>
            <div class="row text-center pb-5">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                    <hr>
                    <p class="text-white text-uppercase">Comidas e bebidas</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <i class="fa fa-gift" aria-hidden="true"></i>
                    <hr>
                    <p class="text-white text-uppercase">Presentes feitos pelos nossos utentes</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <i class="fa fa-star" aria-hidden="true"> </i>
                    <hr>
                    <p class="text-white text-uppercase">Decoração feita pelas nossas crianças</p>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <i class="fa fa-heart" aria-hidden="true"> </i>
                    <hr>
                    <p class="text-white text-uppercase">Música, dança e muita diversão</p>
                </div>
            </div>
        </div>
    </section>
    <section id="three">
        <div class="container pb-5">
            <h2 class="testemunho text-center">Testemunhos</h2>
            <div class="slideshow">
                <div class="mySlides">
                    <div class="row opiniao position-relative align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <figure class="d-inline-block">
                                <img src="img/mulher.jpg" alt="testemunho mulher" class="w-50">
                            </figure>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="m-3">"Estou muito satisfeita com o cuidado e a dedicação que a instituição oferece
                                aos
                                utentes.
                                Obrigada!"</p>
                            <p class="font-weight-bold"> Gabriela Fernandes</p>
                        </div>
                    </div>
                </div>
                <div class="mySlides">
                    <div class="row opiniao position-relative align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <figure class="d-inline-block">
                                <img src="img/joao.jpg" alt="testemunho homem" class="w-50">
                            </figure>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="m-3">"Quando deixo cá os meus filhos, para ir para o trabalho, sei que posso ficar
                                descasado.
                                Um
                                dos melhores sentimentos
                                é saber que eles estão bem. Podem confiar no CSC, eu confio."</p>
                            <p class="font-weight-bold"> João Morgado </p>
                        </div>
                    </div>
                </div>
                <div class="mySlides opiniao position-relative align-items-center">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <figure class="d-inline-block">
                                <img src="img/idosa.jpg" alt="testemunho idosa" class="w-50">
                            </figure>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="m-3">"Gosto muito de estar aqui. Sinto-me bem, eles todos cuidam de mim. Sinto-me
                                como se
                                tivesse em
                                casa."</p>
                            <p class="font-weight-bold"> D. Maria</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
    </section>
    <section id="two">
        <div class="container">
            <h2 class="coming text-white text-center">Inscrição</h2>
            <form data-id-form="1" class="zForm inscricao" action="/Form/f-1" enctype="multipart/form-data"
                method="post">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <input type="text" name="zField-1" placeholder="Nome" class="form-control" required=""
                                data-type="text">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <input type="text" name="zField-7" placeholder="Apelido" class="form-control"
                                data-type="text">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <input type="text" name="zField-2" placeholder="Email" class="form-control" required=""
                                pattern="^([\w\.\-]+)@([\w\-]+).(((\w){2,})+)$" data-type="email">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <input type="number" step="1" name="zField-5" placeholder="Número de Telefone"
                                class="form-control" required="" data-type="integer">
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <textarea name="zField-19" placeholder="Mensagem" rows="5"
                                class="form-control _no-resize"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section id="four">
        <div class="container">
            <h2 class="coming text-white text-center">Contactos</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="box-contact text-white text-center box-out">
                        <div class="box-in">
                            <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i>
                            <p><b>Dia e Hora</b><br> 15 de dezembro às 15h</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="box-contact text-white text-center box-out">
                        <div class="box-in">
                            <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                            <p><b>Morada</b> <br> Travessa da Fonte, N.º 4 <br>Carnide - Pombal <br> Portugal</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="box-contact text-white text-center  box-out">
                        <div class="box-in">
                            <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                            <p><b>Telefone</b> <br>236 946 189 <br> 96 841 58 77</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="five" class="text-white text-center">
        <a href="#" target="_blank"><i class="fa fa-facebook social text-center" aria-hidden="true"></i></a>
        <p class="mt-4">Copyright © Centro Social de Carnide, 2019</p>
    </section>
</body>
<script src="{{asset('vendor/bootstrap/bootstrap.min.js')}}"></script>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

</html>
