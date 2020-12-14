<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_review_images', function (Blueprint $table) {
            $table->bigincrements('product_review_image_id');
            $table->string('product_review_image');
            $table->biginteger('product_id')->unique();
            $table->biginteger('review_id')->unique();
            $table->tinyInteger('product_review_flag');
            $table->foreign('product_id')->references('product_id')
            ->on('products');
            $table->foreign('review_id')->references('review_id')
            ->on('product_reviews');
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
        Schema::dropIfExists('product_review_images');
    }
}
