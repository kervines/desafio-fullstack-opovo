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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();

            $table->string('titulo');

            $table->string('autor');

            $table->text('descricao');

            $table->string('thumbnail')->nullable();

            $table->float('valor')->default(0);

            $table->float('valor_matricula')->default(0);

            $table->integer('lote')->nullable();

            $table->integer('qnt_parcelas')->default(1);

            $table->integer('carga_horaria');

            $table->integer('periodo');

            $table->enum('tipo_periodo', ['dias', 'semanas', 'meses', 'anos']);

            $table->enum('modalidade', ['presencial', 'ead', 'hibrido']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
