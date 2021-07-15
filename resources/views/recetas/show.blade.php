@extends('layouts.app')


@section('botones')

<a href="{{ route('recetas.index') }}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">Volver
    <svg class="icono" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
      </svg>
</a>

@endsection

@section('content')

    {{--<h1>{{$receta}}</h1>--}}

    <article class="contenido-receta bg-white p-5 shadow">
        <h2 class="text-center mb-4">{{$receta->titulo}}</h2>
        <div class="imagen-receta">
            <img src="/storage/{{$receta->imagen}}" class="w-100" alt="">
        </div>

        <div class="receta-meta mt-3">
            <p>
                <span class="font-weight-bold text-primary">Escrito en:</span>
                <a class="text-dark" href="{{route('categorias.show', ['categoriaReceta' => $receta->categoria->id])}}">
                    {{$receta->categoria->nombre}}
                </a>
            </p>
            <p>
                <span class="font-weight-bold text-primary">Escrito por:</span>
                {{--Mostar el usuario--}}
                <a class="text-dark" href="{{route('perfiles.show', ['perfil' => $receta->autor->id])}}">
                    {{$receta->autor->name}}
                </a>
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

            <div class="justify-content-center row text-center">
                <like-button
                    receta-id="{{$receta->id}}"
                    like = "{{$like}}"
                    likes = "{{$likes}}"   
                ></like-button>
            </div>


        </div>
    </article>

@endsection