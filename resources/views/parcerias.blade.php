@extends("layout.master")

@section("title", "Parcerias")

@section("content")

@include ('layout.partials.banner')

<link href="css/parcerias.css" rel="stylesheet" type="text/css" />
<div class="container">
    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="img/parceria1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Segurança Social</h5>
                <p class="card-text">A Segurança Social é um sistema que pretende assegurar direitos básicos dos
                    cidadãos e a igualdade de oportunidades.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/parceria2.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Inovvalor</h5>
                <p class="card-text">A diversidade e a integração dos seus recursos tem permitido ao Grupo Inovvalor dar
                    resposta aos problemas dos seus clientes, de forma a proporcionar um serviço exemplar, eficaz e
                    personalizado às necessidades de cada um.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/parceria3.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Polipom - Policlinica Pombal</h5>
                <p class="card-text">Prestação de serviços médicos, exames complementares de diagnóstico tratamentos de
                    enfermagem.</p>
            </div>
        </div>
    </div>
    <div class="card-group mb-5">
        <div class="card">
            <img class="card-img-top" src="img/parceria4.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Casa da Óptica</h5>
                <p class="card-text">Disponibiliza serviços de excelência através de um acompanhamento personalizado por
                    profissionais qualificados.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/parceria5.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Cercipom</h5>
                <p class="card-text">Procura ser uma entidade de referência na área da reabilitação promovendo a
                    autonomia pessoal, social e profissional dos seus clientes através de um serviço individualizado e
                    abrangente. </p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/parceria6.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Associação Alzheimer Portugal </h5>
                <p class="card-text">Acompanhar a Estratégia da Saúde na Área das Demências e alertar para a urgência de
                    um Plano Nacional para as Demências, participando na sua definição e implementação.</p>
            </div>
        </div>
    </div>
</div>

@endsection
