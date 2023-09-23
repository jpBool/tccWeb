<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gp2_grupos_etapas extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = 
    [
        'id_grupo',
        'id_projeto',
        'nome_grupo',
        'porcentagem',
        'mostrar_porcentagem',
        'ordenador',
        'excluido',
        'num_etapas',
    ];
}
