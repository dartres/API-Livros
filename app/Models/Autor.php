<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $fillable = [ 'nome' ];

    public function Livros(){
        return $this->hasMany(Livro::class, 'id_autor', 'id');
    }
}
