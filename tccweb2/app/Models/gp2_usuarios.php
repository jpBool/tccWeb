<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class gp2_usuarios extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    // Especifique o nome da tabela
    protected $table = 'gp2_usuarios'; // Substitua 'nome_da_sua_tabela' pelo nome correto da tabela

    // Defina o nome do campo de chave primária
    protected $primaryKey = 'id_usuario';

    // Defina o incremento para true (para que ele seja considerado um campo auto-incremento)
    public $incrementing = true;

    const UPDATED_AT = null;
    const CREATED_AT = null;

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

    public function getAuthPassword()
    {
        return $this->senha;
    }
}
