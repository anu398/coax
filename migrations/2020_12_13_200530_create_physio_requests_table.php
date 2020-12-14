<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysioRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physio_requests', function (Blueprint $table) {
            $table->bigincrements('physio_request_id');
            $table->biginteger('physio_request_order_id');
            $table->string('physio_customer_name',100);
            $table->string('physio_customer_mobile');
            $table->biginteger('physio_customer_city');
            $table->tinyinteger('physio_customer_status');
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
        Schema::dropIfExists('physio_requests');
    }
}
