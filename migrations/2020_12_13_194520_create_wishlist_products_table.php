<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlist_products', function (Blueprint $table) {
            $table->bigincrements('wishlist_id');
            $table->biginteger('product_id')->unsigned();
            $table->biginteger('customer_id')->unsigned();
            $table->biginteger('product_section_id');
            $table->foreign('product_id')->references('product_id')
            ->on('products');
             $table->foreign('customer_id')->references('customer_id')
            ->on('customers');
              
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
        Schema::dropIfExists('wishlist_products');
    }
}
