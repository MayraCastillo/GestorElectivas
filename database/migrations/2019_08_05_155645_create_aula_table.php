<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aula', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nomAula')->unique();
            $table->Integer('capacidad');
            $table->String('hora7a9');
            $table->String('hora9a11');
            $table->String('hora11a1');
            $table->String('hora2a4');
            $table->String('hora4a6');
            $table->String('hora6a8');
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
        Schema::dropIfExists('aula');
    }
}
