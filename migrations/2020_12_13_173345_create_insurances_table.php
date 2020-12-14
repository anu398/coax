<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->bigincrements('Insurance_id');
            $table->string('Insurance_title',100);
            $table->lontext('Insurance_description');
            $table->string('Insurance_image');
            $table->string('Insurance_externalmap_link');
            $table->tinyInteger('Insurance_status');     
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
        Schema::dropIfExists('insurances');
    }
}
