<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class aluno extends Model
{
    use HasFactory; // <-- Esta linha é o que conecta o Model ao Factory!
    protected $fillable = [ 'nome','cpf','matricula','na_faculdade' ];

    //pegar aluno por nome
    public function pegarPorNome($nome) {
        return Aluno::where('nome', 'like', "%{$nome}%")->get();
    }

    //pegar boletim do aluno
    public function pegarFichaDoaluno($Alunoid){
    return $alunos = DB::table('aluno_curso')
        ->where('aluno_id', $Alunoid)
        ->get();
    }

    public function cursos()
    {
        return $this->belongsToMany(Curso::class);
    }
}
