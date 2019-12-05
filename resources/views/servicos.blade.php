@extends("layout.master")

@section("title", "Serviços")

@section("content")

@include ('layout.partials.banner')

<link rel="stylesheet" type="text/css" href="../../public/css/servicos.css">
<!--
    <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Serviços</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Services</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
-->

<!--       **************************             -->

      <div id="content">
        <div class="container">
          <section class="bar textboxserv">
            <div class="row">
              <div class="col-md-12 ourservices">
               <!-- <div class="servicosparallax">
                  <div class="heading">
                    <h2>De mãos dadas com o futuro</h2>
                  </div>
              </div>-->
                <p class=" lead text-center">Os nossos serviços</p>
                <div class="serv_line"></div>
              </div>
            </div>

<!--       **************************             -->

            <div class="row services text-center">
              <div class="col-md-6">
                <div class="box-simple contserv">
                  <h3 class="h4">ERPI(Estrutura Residencial Para Idosos)</h3>
                  <p class="contserv">Destinado ao alojamento coletivo, de utilização temporária ou permanente, para pessoas idosas ou outra situação de maior risco de perda de independência e/ou de autonomia.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="box-simple contserv">
                  <h3 class="h4">Centro de Dia</h3>
                  <p class="contserv">Resposta social desenvolvida em equipamento e que consiste na prestação do de serviços a idosos, quando por motivo de doença, deficiência ou por outros impedimentos, não possam assegurar temporária ou permanentemente a satisfação das suas necessidades básicas e/ou atividades da vida diária.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="box-simple contserv">
                  <h3 class="h4">SAD(Serviço de Apoio Domiciliário)</h3>
                  <p class="contserv">Consiste na prestação de cuidados individualizados e personalizados no domicílio a indivíduos e famílias quando, por motivo de doença, deficiência ou outro impedimento, não possam assegurar, temporária ou permanentemente, a satisfação das suas necessidades básicas e ou as actividades da vida diária.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="box-simple contserv">
                  <h3 class="h4">Creche</h3>
                  <p class="contserv">A atividade primordial da creche é de carácter educativo, tendo como principal objetivo o desenvolvimento das crianças, estabelecendo-se como uma atividade eminentemente relacional e promotora da autonomia própria do ser humano.</p>
                </div>
              </div>
            </div>
          </section>



          <section class="bar imgboxserv">
            <div class="row">
                <div class="serv_line2"></div>
                  <div class="col-md-6 servimg">
                    <img src="img/ERPI.jpg" class="img-fluid" alt="Responsive image">
                  </div>

                  <div class="col-md-6 servimg">
                    <img src="img/CENTRO DE DIA.jpg" class="img-fluid" alt="Responsive image">
                  </div>

                  <div class="col-md-6 servimg">
                    <img src="img/SAD.jpg" class="img-fluid" alt="Responsive image">
                  </div>

                  <div class="col-md-6 servimg">
                    <img src="img/CRECHE2.jpg" class="img-fluid" alt="Responsive image">
                  </div>
                  <div class="serv_line3"></div>
            </div>
      </div>
      
    </div>


@endsection