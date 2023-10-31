<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class gp2_usuarios extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $primaryKey = null;
    public $incrementing = false;

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
