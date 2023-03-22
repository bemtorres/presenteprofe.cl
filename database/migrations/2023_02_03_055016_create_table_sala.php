<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sala', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->nullable();
            $table->string('nombre');
            $table->string('descripcion', 500)->nullable();

            $table->json('assets')->nullable();

            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('pp_usuario');

            $table->integer('estado')->default(1);
            $table->boolean('activo')->default(true);
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
        Schema::dropIfExists('rec_transacciones');
    }
};
