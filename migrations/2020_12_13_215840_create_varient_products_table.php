<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVarientProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('varient_products', function (Blueprint $table) {
            $table->bigincrements('product_varient_id');
            $table->biginteger('product_attribute_id');
            $table->string('product_attribute_value');
            $table->string('product_varient_status');
            $table->string('product_varient_stock');
            $table->string('product_varient_price');
            $table->string('product_varient_offer_price');
            $table->string('product_varient_base_image');
            $table->biginteger('product_id')->unsigned();
            $table->foreign('product_id')->references('product_id')
            ->on('products');
            
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
        Schema::dropIfExists('varient_products');
    }
}
