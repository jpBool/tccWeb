<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gp2_status extends Model
{
    protected $table = 'gp2_status';
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $primaryKey = null;
    public $incrementing = false;

    use HasFactory;

    protected $fillable = 
    [
        'id_status',
        'status',
    ];


 
}
