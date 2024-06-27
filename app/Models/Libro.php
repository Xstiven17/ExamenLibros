<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros';
    protected $primaryKey = 'codigo';

    protected $fillable = ['codigo', 'titulo', 'isbn', 'editorial', 'paginas'];

    public function ejemplar()
    {
        return $this->hasMany(Ejemplar::class);
    }
}
