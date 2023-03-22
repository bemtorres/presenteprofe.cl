<?php

use App\Models\Inf\Usuario;
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
        Schema::create('pp_alumno', function (Blueprint $table) {
            $table->id();
            $table->string('code',100)->unique();
            $table->string('correo')->nullable();
            $table->string('run')->nullable();
            $table->string('nombre');
            $table->string('apellido')->nullable();
            $table->string('username'); // mismo correo
            $table->string('password')->nullable();
            $table->string('telefono')->nullable();
            $table->json('integrations')->nullable();
            $table->json('info')->nullable();
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
        Schema::dropIfExists('inf_usuario');
    }
};
