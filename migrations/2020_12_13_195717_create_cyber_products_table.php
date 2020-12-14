<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCyberProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cyber_products', function (Blueprint $table) {
        $table->bigincrements('cyber_product_id');
        $table->string('cyber_product_name',100)->unique();
        $table->string('cyber_product_name_slug')->unique();
        $table->string('cyber_product_meta_name',100);
        $table->string('cyber_product_overview');
        $table->lontext('cyber_product_description');
        $table->string('cyber_product_features');
        $table->decimal('cyber_product_price',8,2); 
        $table->decimal('cyber_product_offer_price',8,2);
        $table->string('cyber_product_conditions',100); 
        $table->tinyinteger('cyber_product_status');
        $table->string('external_link');
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
        Schema::dropIfExists('cyber_products');
    }
}
