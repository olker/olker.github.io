<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibreriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librerias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',45);
            $table->string('genero',45);
            $table->string('imagen');
            $table->string('doblaje',45);
            $table->string('subtitulado',45);
            $table->string('descripcion');
            $table->integer('disco');
            $table->double('peso');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('librerias');
    }
}
