<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
        $table->bigincrements('purchase_id');
        $table->string('purchase_code');
        $table->string('orderd_item');
        $table->string('item_quantity');
        $table->string('product_variation_id');
        $table->string('purchase_account');
        $table->biginteger('customer_id')->unsinged();
        $table->biginteger('product_id')->unsinged();
         $table->foreign('customer_id')->references('customer_id')
            ->on('customers');
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
        Schema::dropIfExists('purchases');
    }
}
