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
        Schema::create('categoria_curso', function (Blueprint $table) {
            $table->foreignId('curso_id')->constrained('cursos', 'id')->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained('categorias', 'id')->onDelete('cascade');

            $table->primary(['curso_id', 'categoria_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_curso');
    }
};
