<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->bigincrements('service_request_id');
            $table->string('service_request_name',100);
            $table->biginteger('service_request_order_id');
            $table->char('service_request_phone');
            $table->string('service_request_email',100);
            $table->date('service_request_date');
            $table->time('service_request_time',0);
            $table->biginteger('location_id')->unsigned();
            $table->biginteger('service_id')->unsigned();
            $table->biginteger('catogory_id')->unsigned();
            $table->foreign('location_id')->references('location_id')
            ->on('locations');        
             $table->foreign('service_id')->references('service_id')
            ->on('services');          
             $table->foreign('catogory_id')->references('catogory_id')
            ->on('catogories');
            $table->tinyInteger('service_request_status_id');
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
        Schema::dropIfExists('service_requests');
    }
}
