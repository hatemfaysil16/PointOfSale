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
            $table->date('date');
            $table->foreignId('products_id')->references('id')->on('products')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('quantity');
            $table->string('PurchasePrice');
            $table->date('ProductionDate');
            $table->date('ExpiryDate');
            $table->string('WarehouseNumber');
            $table->string('InvoiceNumber');
            $table->string('total');
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
