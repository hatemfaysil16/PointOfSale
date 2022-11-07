<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->enum('invoicetype', ['company', 'shop']);
            $table->date('date');
            $table->foreignId('clients_id')->references('id')->on('clients')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('products_id')->references('id')->on('products')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('qty');
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
        Schema::dropIfExists('invoices');
    }
}
