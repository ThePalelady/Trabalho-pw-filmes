<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('categoria');
            $table->string('imagem');
            $table->string('sipnose');
            $table->string('link');
            $table->float('ano')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmes');
    }
}
