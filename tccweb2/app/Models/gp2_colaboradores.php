<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gp2_colaboradores extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $primaryKey = null;
    public $incrementing = false;
    use HasFactory;

    protected $fillable = 
    [
        'id_colaborador',
        'id_projeto',
        'colaborador_adm',
        
    ];
}
