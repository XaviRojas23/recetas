<?php

namespace App\Models;

use App\Models\CategoriaReceta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Receta extends Model
{
    protected $fillable = [
        'titulo',
        'preparacion',
        'ingredientes',
        'imagen',
        'categoria_id'
    ];

    use HasFactory;
    public function categoria(){
        return $this->belongsTo(CategoriaReceta::class);
        }
    }   
