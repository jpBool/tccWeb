<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gp2_imagens extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = 
    [
        'id_imagem',
        'id_projeto',
        'diretorio',
        'nome',
        'descricao_imagem',
        'imagem_principal',
    
    ];
}
