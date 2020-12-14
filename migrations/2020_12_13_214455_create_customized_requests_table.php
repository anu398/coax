<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomizedRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customized_requests', function (Blueprint $table) {
            $table->bigincrements('customized_request_id');
            $table->biginteger('category_id')->unsinged();
            $table->string('cust_request_specfication');
            $table->string('cust_request_image')->nullable();
            $table->longtext('cust_request_description');
            $table->string('cust_request_name');
            $table->string('cust_request_email');
            $table->string('cust_request_mobile');
            $table->string('cust_request_order_id');
            $table->string('cust_request_status');
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
        Schema::dropIfExists('customized_requests');
    }
}
