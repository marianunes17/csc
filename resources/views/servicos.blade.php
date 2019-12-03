@extends("layout.master")

@section("title", "Serviços")

@section("content")

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


<!--       **************************             -->

      <div id="content">
        <div class="container">
          <section class="bar">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h2>De mãos dadas com o futuro</h2>
                </div>
                <p class=" lead text-center">Os nossos serviços</p>
              </div>
            </div>

<!--       **************************             -->

            <div class="row services text-center">
              <div class="col-md-6">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-desktop"></i></div>
                  <h3 class="h4">ERPI</h3>
                  <p>Destinado ao alojamento coletivo, de utilização temporária ou permanente, para pessoas idosas ou outra situação de maior risco de perda de independência e/ou de autonomia.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-print"></i></div>
                  <h3 class="h4">Centro de Dia</h3>
                  <p>Resposta social desenvolvida em equipamento e que consiste na prestação do de serviços a idosos, quando por motivo de doença, deficiência ou por outros impedimentos, não possam assegurar temporária ou permanentemente a satisfação das suas necessidades básicas e/ou atividades da vida diária.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-globe"></i></div>
                  <h3 class="h4">SAD</h3>
                  <p>Consiste na prestação de cuidados individualizados e personalizados no domicílio a indivíduos e famílias quando, por motivo de doença, deficiência ou outro impedimento, não possam assegurar, temporária ou permanentemente, a satisfação das suas necessidades básicas e ou as actividades da vida diária.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-lightbulb-o"></i></div>
                  <h3 class="h4">Creche</h3>
                  <p>A atividade primordial da creche é de carácter educativo, tendo como principal objetivo o desenvolvimento das crianças, estabelecendo-se como uma atividade eminentemente relacional e promotora da autonomia própria do ser humano.</p>
                </div>
              </div>
            </div>
          </section>



          <section class="bar">
            <div class="row">
                <div class="heading col-md-12">
                  <h2>Why choose us</h2>
              </div>

                  <div class="col-md-3">
                    <img src="img/ERPI.jpg" class="rounded img-fluid" alt="Responsive image">
                  </div>

                  <div class="col-md-3">
                    <img src="img/CENTRO DE DIA.jpg" class="rounded img-fluid" alt="Responsive image">
                  </div>

                  <div class="col-md-3">
                    <img src="img/SAD.jpg" class="rounded img-fluid" alt="Responsive image">
                  </div>

                  <div class="col-md-3">
                    <img src="img/CRECHE.jpg" class="rounded img-fluid" alt="Responsive image">
                </div>
            </div>
          </section>

        </div>
        <section class="bar bg-gray no-mb">
          <div class="container">
            <div class="row showcase text-center">
              <div class="col-md-3 col-sm-6">
                <div class="item">
                  <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-align-justify"></i></div>
                  <h4><span class="h1 counter">580</span><br> Websites</h4>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="item">
                  <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-users"></i></div>
                  <h4><span class="h1 counter">100</span><br>Satisfied Clients</h4>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="item">
                  <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-copy"></i></div>
                  <h4><span class="h1 counter">320</span><br>Projects</h4>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="item">
                  <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-font"></i></div>
                  <h4><span class="h1 counter">923</span><br>Magazines and Brochures</h4>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="bar background-pentagon no-mb">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="heading text-center">
                  <h2>Testimonials</h2>
                </div>
                <p class="lead">We have worked with many clients and we always like to hear they come out from the cooperation happy and satisfied. Have a look what our clients said about us.</p>
                <!-- Carousel Start-->
                <ul class="owl-carousel testimonials list-unstyled equal-height">
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>John McIntyre</h5>
                            <p>CEO, TransTech</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream.</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>John McIntyre</h5>
                            <p>CEO, TransTech</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-2.jpg" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>John McIntyre</h5>
                            <p>CEO, TransTech</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-3.png" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>John McIntyre</h5>
                            <p>CEO, TransTech</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-4.jpg" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>John McIntyre</h5>
                            <p>CEO, TransTech</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- Carousel End-->
              </div>
            </div>
          </div>
        </section>
      </div>

@endsection