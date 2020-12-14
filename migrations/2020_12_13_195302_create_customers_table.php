<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigincrements('customer_id');
            $table->string('customer_firstname',100);
            $table->string('customer_lastname',100);
            $table->string('customer_email',100);
            $table->char('customer_mobile_number',100);
            $table->string('customer_username',100);
            $table->string('customer_password',100);
            $table->tinyInteger('customer_status');
           
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
        Schema::dropIfExists('customers');
    }
}
