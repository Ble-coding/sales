<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achats', function (Blueprint $table) {
            $table->id();
            $table->string('fournisseur', 255);
            $table->string('contactachat')->unique();
            $table->string('marqueachat')->unique();
            $table->string('modelachat')->unique();
            $table->string('dateachat');
            $table->string('garantieachat');
            $table->string('montantachat');
            $table->string('depot');
            $table->string('sitgeoachat');
            $table->string('nombreachat');
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
        Schema::dropIfExists('achats');
    }
}
