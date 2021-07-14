<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CategoriaReceta;

class InicioController extends Controller
{
    public function index(){

        $votos = Receta::withCount('likes')->orderBy('likes_count', 'desc')->take(3)->get();

        $nuevas = Receta::latest()->limit(5)->get();

        $categorias = CategoriaReceta::all();
        
        $recetas = [];

        foreach($categorias as $categoria){
            $recetas[ Str::slug ($categoria->nombre) ][  ] = Receta::where('categoria_id', $categoria->id)->take(3)->get();
        }

        //return $recetas;

        return view('inicio.index' , compact('nuevas', 'recetas', 'votos'));
    }
}
