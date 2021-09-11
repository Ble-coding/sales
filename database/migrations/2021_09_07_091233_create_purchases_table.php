<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('datepurchase');
            $table->string('purchase_quantity');
            $table->string('montant');
            // $table->unsignedbigInteger('stock_id')->index();
            $table->unsignedbigInteger('appro_id')->index();
            // $table->unsignedbigInteger('produit_id')->index();
            $table->unsignedbigInteger('client_id')->index();

            // $table->foreign('stock_id')->references('id')->on('stocks');
            $table->foreign('appro_id')->references('id')->on('appros');
            // $table->foreign('produit_id')->references('id')->on('produits');
            $table->foreign('client_id')->references('id')->on('clients');
         
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
        Schema::dropIfExists('purchases');
    }
}
