<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('heading_first')->nullable();
            $table->longText('heading_second')->nullable();
            $table->longText('heading_third')->nullable();            
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->string('link')->nullable();
            $table->string('link_lable')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
