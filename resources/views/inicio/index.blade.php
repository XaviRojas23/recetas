@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
@endsection

@section('content')
    <div class="container nuevas-recetas">
        <h1 class="titulo-categoria text-uppercase mt-4 mb-4">Ultimas recetas</h1>
        <div class="owl-carousel owl-theme">
            @foreach($nuevas as $nueva)
                <div class="card">
                    <img src="/storage/{{$nueva->imagen}}" class="card-img-top" alt="imagen receta">
                    <div class="card-body">
                        <h3>{{Str::title($nueva->titulo)}}</h3>

                        <p>{{Str::words( strip_tags ($nueva->preparacion), 20)}}</p>
                        <a href="{{route('recetas.show', ['receta'=> $nueva->id])}}" class="btn btn-primary d-block font-weight-bold text-uppercase">Ver receta</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <h2 class="titulo-categoria text-uppercase mt-5 mb-4"> Recetas más votadas</h2>
        <div class="row">
            @foreach($votos as $receta)
                    @include('ui.receta')
            @endforeach
        </div>
    </div>

    @foreach($recetas as $key => $grupo)
        <div class="container">
            <h2 class="titulo-categoria text-uppercase mt-5 mb-4"> {{str_replace('-', ' ', $key)}}</h2>
            <div class="row">
                @foreach($grupo as $recetas)
                    @foreach($recetas as $receta)
                        @include('ui.receta')
                    @endforeach
                @endforeach
            </div>
        </div>

    @endforeach
@endsection