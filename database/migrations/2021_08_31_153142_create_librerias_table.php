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
            $table->string('nombre',120);
            $table->string('genero',120);
            $table->string('imagen');
            $table->string('doblaje',120);
            $table->string('subtitulado',120);
            $table->text('descripcion');
            $table->integer('disco');
            $table->double('peso');
            $table->string('tipo',120);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
