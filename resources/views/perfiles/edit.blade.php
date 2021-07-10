@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('botones')

<a href="{{ route('recetas.index') }}" class="btn btn-primary mr-2 text-white">Volver</a>

@endsection

@section('content')

    

    <h1 class="text-center">Editar mi perfil</h1>

    <div class="row justify-content mt-5">
        <div class="col-md-10 bg-white p-3">
            <form action="{{route('perfiles.update', ['perfil' => $perfil->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre</label>

                    <input type="text" name="nombre" class="form-control
                        @error('nombre')
                            is-invalid
                        @enderror " 
                        id="nombre" placeholder="Tu nombre" value="{{$perfil->usuario->name}}">
                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>
                                {{$message}}
                            </strong>
                        </span>    
                    @enderror
                </div>
                <div class="form-group">
                    <label for="url">Sitio web</label>

                    <input type="text" name="url" class="form-control
                        @error('url')
                            is-invalid
                        @enderror " 
                        id="url" placeholder="Tu sitio web" value="{{$perfil->usuario->url}}">
                    @error('url')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>
                                {{$message}}
                            </strong>
                        </span>    
                    @enderror
                </div>
                <div class="form-group mt-3" >
                    <label for="biografia">Biografia</label>
                    <input type="hidden" id="biografia" name="biografia" value="{{$perfil->biografia}}"> 
                    <trix-editor input="biografia" class="form-control trix-content @error ('biografia') is-invalid @enderror "></trix-editor>
                    @error('biografia')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>
                                {{$message}}
                            </strong>
                        </span>   
                    @enderror
                </div>
                <div class="form-group mt-3" >
                    <label for="imagen">Tu Imagen</label>

                    <input id="imagen" type="file" class="form-control @error ('imagen') is-invalid @enderror" name="imagen">
                    @if($perfil->imagen)
                        
                    
                    <div class="mt-4">
                        <p>Imagen Actual:</p>

                        <img src="/storage/{{$perfil->imagen}}" style="width: 300px">
                    </div>
                    
                    @error('imagen')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>
                                {{$message}}
                            </strong>
                        </span>   
                    @enderror
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Actualizar perfil">
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.js" integrity="sha512-H8CbNdhcOBCt62S6eVGAUSiyNx5OGVEVrYIIVs0iIgurgD1+oTA9THTZ1tqxSE9yw9vzfilg83xgyxD467a28g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.min.js" integrity="sha512-lyT4F0/BxdpY5Rn1EcTA/4OTTGjvJT9SxWGxC1boH9p8TI6MzNexLxEuIe+K/pYoMMcLZTSICA/d3y0ColgiKg==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" integrity="sha512-2RLMQRNr+D47nbLnsbEqtEmgKy67OSCpWJjJM394czt99xj3jJJJBQ43K7lJpfYAYtvekeyzqfZTx2mqoDh7vg==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
@endsection
