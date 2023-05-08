<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gp2_usuarios extends Model
{
    protected $fillable = 
    [
        'nome',
        'bio',
        'avatar',
        'naturalidade',
        'nascimento',
        'inscricao',
        'email',
        'senha',
        'telefone',
        'commits',  
        'excluido',
    ];
}
