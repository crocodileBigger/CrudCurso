<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class curso extends Model
{
    use HasFactory; // <-- Esta linha é o que conecta o Model ao Factory!
    protected $fillable = [ 'nome','cpf','matricula','na_faculdade' ];

    //pegar todos os cursos
    public function pegarTodosCursos(){
        return curso::all();
    }

    public function alunos()
    {
        return $this->belongsToMany(Aluno::class);
    }
}
