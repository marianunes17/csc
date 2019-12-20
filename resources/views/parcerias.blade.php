@extends("layout.master")

@section("title", "Parcerias")

@section("content")

@include ('layout.partials.banner')

<link href="css/parcerias.css" rel="stylesheet" type="text/css" />
<div class="container">
    <div class="row mb-5">
        @foreach ($parcerias as $parceria)
        <div class="col-md-4 col-sm-12 mb-4">
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top"
                        src="{{Storage::disk('public')->url('parceria_images/').$parceria->imagem}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$parceria->titulo}}</h5>
                        <p class="card-text">{{$parceria->descricao}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
