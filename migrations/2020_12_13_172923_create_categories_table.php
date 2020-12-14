<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigincrements('category_id');
            $table->string('category_name',100)->unique();
            $table->string('category_name_slug')->unique();
            $table->biginteger('parent_id');
            $table->tinyInteger('category_status');
            $table->string('category_icon');
            $table->longText('category_description');
            $table->biginteger('template_id')->unsinged();
            $table->foreign('template_id')->references('template_id')
            ->on('templates');
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
        Schema::dropIfExists('categories');
    }
}
