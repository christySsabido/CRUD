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
    public function up():void
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 50);
            $table->string('palabras clave', 50);
            $table->string('tema',30);
            $table->string('asignatura', 20);
            $table->string('resumen', 300);
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
        Schema::dropIfExists('notes');
    }
};
