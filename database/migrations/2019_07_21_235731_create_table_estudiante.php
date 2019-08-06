<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEstudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('codEstudiante')->unique();
            $table->Integer('identificacionEst')->unique();
            $table->String('nomEstudiante');
            $table->String('email')->unique();
            $table->string('api_token',100)->nulleable();
            $table->timestamps();
        });
        
        Schema::create('estudiante_electiva', function (Blueprint $table) {
            $table->unsignedBigInteger('idEstudiante');
            $table->unsignedBigInteger('idElectiva');
            $table->timestamps();
            $table->foreign('idEstudiante')->references('id')->on('estudiantes');
            $table->foreign('idElectiva')->references('id')->on('electivas');
            $table->primary(['idElectiva','idEstudiante']);
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante_electiva');
        Schema::dropIfExists('estudiantes');
    }
}
