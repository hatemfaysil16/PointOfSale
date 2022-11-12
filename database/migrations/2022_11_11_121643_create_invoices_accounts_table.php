<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoices_numbers_id')->references('id')->on('invoices_numbers')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('totalpacks');
            $table->string('subtotal');
            $table->string('customerbalance');
            $table->string('additionalDiscount');
            $table->float('tax');
            $table->float('total');
            $table->float('paid');
            $table->float('Left');
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
        Schema::dropIfExists('invoices_accounts');
    }
}
