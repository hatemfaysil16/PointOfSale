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
            $table->foreignId('users_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('number')->unique();
            $table->string('totalpacks');
            $table->string('subtotal');
            $table->string('customerbalance');
            $table->string('additionalDiscount');
            $table->float('tax');
            $table->float('total');
            $table->float('paid');
            $table->float('Left');
            $table->enum('invoicetype', ['company', 'shop']);
            $table->date('date');
            $table->foreignId('clients_id')->references('id')->on('clients')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
            $table->string('shipTo_name');
            $table->string('shiptTo_companyName');
            $table->string('shiptTo_address');
            $table->string('shiptTo_city');
            $table->string('shiptTo_state');
            $table->string('shiptTo_postalCode');
            $table->string('shiptTo_phone');
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
