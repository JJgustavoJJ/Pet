<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $fillable = [
        'nome',
        'descricao',
        'marca',
        'categoria',
        'precoCusto',
        'precoVenda',  
        'quantidadeEstoque',
    ];

    use HasFactory;
    

}
