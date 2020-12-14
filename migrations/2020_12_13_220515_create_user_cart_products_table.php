<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCartProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cart_products', function (Blueprint $table) {
            $table->bigincrements('cart_id');
            $table->biginteger('user_id');
            $table->biginteger('product_id');
            $table->biginteger('quantity_id');
            $table->biginteger('attribute_size_id');
            $table->biginteger('attribute_color_id');
            $table->biginteger('variation_type_id');
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
        Schema::dropIfExists('user_cart_products');
    }
}
