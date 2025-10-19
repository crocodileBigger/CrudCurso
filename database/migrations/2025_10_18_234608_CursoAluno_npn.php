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
            $table->float('nota',10 ,0);
            $table->foreignId('curso_id')->constrained('curso');
            $table->foreignId('aluno_id')->constrained('aluno');
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
