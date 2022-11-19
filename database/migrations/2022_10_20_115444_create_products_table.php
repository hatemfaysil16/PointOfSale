<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('ProductGroup');
            $table->string('ProductBarcode');
            
            $table->string('BoxLength');
            $table->string('BoxWidth');
            $table->string('BoxHight');
            $table->string('PacksPerBox');

            $table->string('PackType');
            $table->string('PackWeight');
            $table->foreignId('typesofweights_id')->references('id')->on('typesofweights')->cascadeOnUpdate()->cascadeOnDelete();



            $table->string('BoxCostPrice');
            $table->string('BoxPrice_shop');
            $table->string('BoxPrice_company');
                        
            $table->string('CountryOfOrigin');
            $table->string('Manufacturer');

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
        Schema::dropIfExists('products');
    }
}
