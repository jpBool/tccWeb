<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gp2_projetos extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = 
    [
        'id_criador',
        'autores',
        'email_contato',
        'nome_projeto',
        'palavras_chave',
        'publico',
        'descricao_breve',
        'descricao_detalhado',
        'link_site',
        'link_youtube',  
        'porcentagem',
        'data_criacao',
        'data_atualizacao',
        'excluido',
        'linguagem',
        'previsão',
        'num_grupos',
    ];
}
