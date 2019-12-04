@extends("layout.master")

@section("title", "História")

@section("content")

@include ('layout.partials.banner')

<div id="content">
    <div class="container">
        <section class="bar">
            <div class="row">
                <div class="heading text-center">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>A nossa História</h2>
                        </div>
                    </div>
                    <p>O Centro Social de Carnide encontra-se hoje enquadrado num contexto de crescimento e de
                        exigência. Foi constituído em 2002 como uma Instituição Humanitária de Solidariedade Social sem
                        fins lucrativos, por um grupo de habitantes de Carnide, atentos à evolução e às suas
                        consequências na Idade Sénior, bem como a inexistência de respostas na área da 1ª infância.</p>
                    <p>Apostando na diferenciação dos serviços, implementou um projeto inovador com um serviço gratuito
                        e diferenciado baseado em visitas domiciliárias, dos utentes à comunidade. Pretende ser uma
                        instituição aberta, que promove o encontro com a comunidade, nomeadamente nas suas festas e
                        convívios.</p>
                    <p>O Centro Social de Carnide, assume ainda uma estratégia focada na qualidade dos serviços, assente
                        numa gestão rigorosa, com vista à sua sustentabilidade e à garantia dos investimentos
                        necessários à prossecução dos seus objetivos, procurando atingir níveis cada vez mais existentes
                        de qualidade, humanização e segurança e foco no cliente.</p>
                </div>
            </div>
        </section>
        <section class="bg-white bar mb-5">
            <div class="container">
                <div class="heading text-center">
                    <div class="heading">
                        <h2>Os Momentos mais Importantes</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="home-blog-post">
                            <div class="image"><img src="img/csc-2-01.jpg" alt="..." class="img-fluid">
                                <div class="overlay d-flex align-items-center justify-content-center"></div>
                            </div>
                            <div class="text" style="color:#1D5B90" ;>
                                <h4>Ano de Criação </a></h4>
                                <p class="intro">O Centro Social de Carnide foi criado em 2002 como uma Instituição
                                    Humanitária de Solidariedade Social sem fins lucrativos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="home-blog-post">
                            <div class="image"><img src="img/portfolio-3.jpg" alt="..." class="img-fluid">
                                <div class="overlay d-flex align-items-center justify-content-center"></div>
                            </div>
                            <div class="text" style="color:#1D5B90" ;>
                                <h4>Protócolo </a></h4>
                                <p class="intro">Em Novembro de 2007 é assinado um protocolo de cooperação com a
                                    Segurança Social que permite iniciar o serviço de apoio domiciliário.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="home-blog-post">
                            <div class="image"><img src="img/csc-1.jpg" alt="..." class="img-fluid">
                                <div class="overlay d-flex align-items-center justify-content-center"></div>
                            </div>
                            <div class="text" style="color:#1D5B90" ;>
                                <h4>Novas Instalações </a></h4>
                                <p class="intro">Em Setembro de 2011, entrou numa nova etapa, com a abertura das
                                    novas instalações.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="home-blog-post">
                            <div class="image"><img src="img/portfolio-6.jpg" alt="..." class="img-fluid">
                                <div class="overlay d-flex align-items-center justify-content-center"></div>
                            </div>
                            <div class="text" style="color:#1D5B90" ;>
                                <h4>Candidatura </a></h4>
                                <p class="intro">No ano de 2012 viu aprovado a candidatura apresentada ao PRODER
                                    financiando equipamento e viaturas necessárias ao funcionamento e crescimento do
                                    serviço.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


@endsection
