@extends('layouts.app')

@section('content')

    {{--<h1>{{$receta}}</h1>--}}

    <article class="contenido-receta">
        <h2 class="text-center mb-4">{{$receta->titulo}}</h2>
        <div class="imagen-receta">
            <img src="/storage/{{$receta->imagen}}" class="w-100" alt="">
        </div>

        <div class="receta-meta mt-2">
            <p>
                <span class="font-weight-bold text-primary">Escrito en:</span>
                {{$receta->categoria->nombre}}
            </p>
            <p>
                <span class="font-weight-bold text-primary">Escrito por:</span>
                {{--Mostar el usuario--}}
                {{$receta->autor->name}}
            </p>
            <p>
                <span class="font-weight-bold text-primary">Fecha:</span>
                {{--Mostar el usuario--}}
                @php
                    $fecha = $receta->created_at
                @endphp
                <fecha-receta fecha="{{$fecha}}"></fecha-receta>
            </p>
    
            <div class="ingredientes">
                <h3 class="my-3 text-primary">Ingredientes</h3>
                {!! $receta->ingredientes !!}
            </div>

            <div class="preparacion">
                <h3 class="my-3 text-primary">Preparacion</h3>
                {!! $receta->preparacion !!}
            </div>
        </div>
    </article>

@endsection