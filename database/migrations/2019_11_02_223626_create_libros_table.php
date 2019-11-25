<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isbn', 100);
            $table->string('titulo', 100);
            $table->string('img', 500);
            $table->string('descripcion', 255);
            $table->string('nombre_autor', 50);
            $table->string('total_copies');
            $table->date('publicacion');
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('editorial_id')->unsigned();
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('editorial_id')->references('id')->on('editorials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
