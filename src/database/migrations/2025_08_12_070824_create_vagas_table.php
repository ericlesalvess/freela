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
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_empresa')->constrained('empresas')->onDelete('cascade');
            $table->string('titulo_vaga');
            $table->string('descricao_vaga');
            $table->decimal('valor_freelancer', 10, 2);
            $table->enum('periodo_pagamento', ['por_hora', 'por_dia', 'por_projeto']);
            $table->string('endereco');
            $table->string('horario_trabalho');
            $table->string('beneficios')->nullable(); // Opcional.
            $table->enum('status', ['ativa', 'pausada', 'concluida'])->default('ativa');
            $table->timestamps(); // 'created_at' servirá como sua 'data_publicacao'.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};