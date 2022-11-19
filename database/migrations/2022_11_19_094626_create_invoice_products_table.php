<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('products_id')->references('id')->on('products')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('qty');
            $table->string('invoicenumber');
            $table->foreignId('users_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->enum('type', ['accept', 'reject','waiting'])->default('waiting');
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
        Schema::dropIfExists('invoice_products');
    }
}
