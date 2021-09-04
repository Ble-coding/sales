<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 255);
            $table->string('contact')->unique();
            $table->string('marque')->unique();
            $table->string('model')->unique();
            $table->string('date');
            $table->string('garantie');
            $table->string('livreur');
            $table->string('sitgeo');
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
        Schema::dropIfExists('ventes');
    }
}
