<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductBrandRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_brand_rules', function (Blueprint $table) {
            
            $table->biginteger('brand_id')->unsinged();
            $table->foreign('brand_id')->references('product_brand_id')
            ->on('product_brands');
            $table->biginteger('category_id')->unsinged();
            $table->foreign('category_id')->references('brand_category_id')
            ->on('brand_categories');
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
        Schema::dropIfExists('product_brand_rules');
    }
}
