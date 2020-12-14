<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_history', function (Blueprint $table) {
            $table->bigincrements('order_history_id');
            $table->biginteger('order_id')->unsigned();
            $table->biginteger('purchase_id')->unsigned();
            $table->date('order_date');
            $table->foreign('order_id')->references('order_id')->on('orders');
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
        Schema::dropIfExists('order_history');
    }
}
