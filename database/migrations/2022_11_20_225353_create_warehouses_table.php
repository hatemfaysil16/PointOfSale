<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('products_id')->nullable()->references('id')->on('products')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('buy')->default(0);
            $table->integer('sold')->default(0);
            $table->integer('available')->default(0);
            $table->string('WarehouseNumber')->nullable();
            $table->date('date')->nullable();
            $table->date('ExpiryDate')->nullable();
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
        Schema::dropIfExists('warehouses');
    }
}
