<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_reviews', function (Blueprint $table) {
           $table->bigincrements('review_id');
            $table->biginteger('product_id')->unsigned();
            $table->biginteger('category_id')->unsigned();
            $table->string('review_name',100);
            $table->longtext('review_description');
            $table->integer('review_rating');
            $table->biginteger('customer_id')->unsigned();
            $table->foreign('product_id')->references('product_id')
            ->on('products');
            $table->foreign('category_id')->references('category_id')
            ->on('categories');
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
        Schema::dropIfExists('product_reviews');
    }
}
