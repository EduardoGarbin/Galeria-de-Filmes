<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Filme extends Model
{
    use HasFactory;


    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'genero',
        'trailer'
    ];

    public function getImageUrlAttribute(){
        return asset('img/' . $this->imagem);
    }


}
