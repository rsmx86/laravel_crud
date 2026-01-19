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
        Schema::table('posts', function (Blueprint $table) {
        // Cria a ligação com a tabela de usuários
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
        $table->dropForeign(['user_id']); // Remove a ligação
        $table->dropColumn('user_id');    // Remove a coluna
    });
    }
};
