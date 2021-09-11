<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appros', function (Blueprint $table) {
            $table->id();
            $table->string('dateappro');
            $table->string('appro_quantity');
            $table->string('montant');
            // $table->unsignedbigInteger('stock_id')->index();
            // $table->unsignedbigInteger('client_id')->index();
            $table->unsignedbigInteger('produit_id')->index();
            $table->unsignedbigInteger('fournisseur_id')->index();

            // $table->foreign('stock_id')->references('id')->on('stocks');
            // $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('produit_id')->references('id')->on('produits');
            $table->foreign('fournisseur_id')->references('id')->on('fournisseurs');
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
        Schema::dropIfExists('appros');
    }
}
