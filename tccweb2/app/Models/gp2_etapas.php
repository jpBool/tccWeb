<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gp2_etapas extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $primaryKey = null;
    public $incrementing = false;

    use HasFactory;

    protected $fillable = 
    [
        'id_grupo',
        'id_grupo',
        'nome_etapa',
        'peso',
        'porcentagem',
        'descricao_etapa',
        'status',
        'prioridade',
        'ordenador',
        'responsavel',
        'email_responsavel',
        'impedimento',
        'data_criacao',
        'data_atualizacao',
        'atualizador',
        'excluido',
    ];
}
