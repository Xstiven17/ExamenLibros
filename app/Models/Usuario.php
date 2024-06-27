<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primarykey = 'codigo';

    protected $fillable = ['codigo', 'nombre', 'tfno', 'direccion'];

    public function ejemplar()
    {
        return $this->belongsToMany(Ejemplar::class);
    }
}

