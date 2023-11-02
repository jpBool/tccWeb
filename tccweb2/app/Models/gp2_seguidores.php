<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gp2_seguidores extends Model
{
    use HasFactory;

    protected $table = 'gp2_seguidores';
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $primaryKey = null;
    public $incrementing = false;

    use HasFactory;

    protected $fillable = 
    [
        'id_seguidor',
        'id_seguido',
        'data_inicio_seguindo',
    ];
}
