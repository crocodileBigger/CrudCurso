<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('CursoAluno_npn', function (Blueprint $table){
            $table->id();
            $table->float('nota', 10 , 0);

            // Colunas
            $table->unsignedBigInteger('cursos_id');
            $table->unsignedBigInteger('alunos_id');

            // Restrições de Chave Estrangeira
            $table->foreign('cursos_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('alunos_id')->references('id')->on('alunos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CursoAluno_npn');
    }
};
