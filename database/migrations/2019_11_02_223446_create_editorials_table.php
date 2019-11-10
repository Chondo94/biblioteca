<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editorials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 100);
            $table->string('telefono', 50);
            $table->string('direccion', 100);
            $table->string('email', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('editorials');
    }
}
