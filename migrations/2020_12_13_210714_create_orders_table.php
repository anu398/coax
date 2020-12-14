<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
        $table->bigincrements('order_id');
        $table->string('order_number');
        $table->biginteger('customer_id')->unsinged();
        $table->biginteger('product_id')->unsinged();
        $table->biginteger('purchase_id')->unsinged();
        $table->biginteger('product_variation_id');
        $table->string('product_total_account');
        $table->longtext('shipping_address'); 
        $table->biginteger('country_id');
        $table->biginteger('state_id'); 
        $table->biginteger('district_id'); 
        $table->string('shipping_landmark'); 
        $table->string('shipping_pincode'); 
        $table->string('shipping_status');
        $table->date('shipping_date'); 
        $table->string('payment_type'); 
        $table->foreign('customer_id')->references('customer_id')
            ->on('customers');
        $table->foreign('product_id')->references('product_id')
            ->on('products');       
        $table->foreign('purchase_id')->references('purchase_id')
            ->on('purchases');            
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
        Schema::dropIfExists('orders');
    }
}
