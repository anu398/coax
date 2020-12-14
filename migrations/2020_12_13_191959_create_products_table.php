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
            $table->bigincrements('product_id');
            $table->string('product_name',100)->unique();
            $table->string('product_name_slug')->unique();
            $table->biginteger('category_id')->unsigned();
            $table->string('product_type',100);
            $table->string('product_meta_title'); 
            $table->longtext('product_description');
            $table->string('product_overview');
            $table->decimal('product_price',8,2);
            $table->decimal('product_price_offer',8,2);
            $table->char('product_stock_count');
            $table->string('product_shipping_specification');
            $table->string('product_dairy_info');
            $table->biginteger('brand_id')->unsigned();
            $table->foreign('brand_id')->references('brand_id')
            ->on('product_brands');
            $table->foreign('category_id')->references('category_id')
            ->on('categories');
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
