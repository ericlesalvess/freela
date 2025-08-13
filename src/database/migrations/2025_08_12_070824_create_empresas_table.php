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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id(); // Cria a chave primária 'id' (BIGINT UNSIGNED AUTO_INCREMENT).
            $table->string('nome_empresa');
            $table->string('email_contato')->unique();
            $table->string('telefone_whatsapp', 20); // Armazena o número do WhatsApp.
            $table->string('logo_url')->nullable(); // Opcional, pode ser nula.
            $table->timestamps(); // Cria as colunas 'created_at' e 'updated_at' automaticamente. 'created_at' serve como sua 'data_criacao'.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};