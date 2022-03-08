<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('slug')->unique();            
            $table->string('banner')->nullable();
            $table->string('image_png')->nullable();
            $table->string('image_webp')->nullable();
            $table->string('image_jpg')->nullable();
            $table->string('alt')->nullable();
	    $table->string('image_size')->nullable();
	    $table->string('file_format')->nullable();
            $table->string('image_category_id')->nullable();
            $table->string('image_tag_id')->nullable();
            $table->bigInteger('download_count')->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();            
            $table->longText('meta_keywords')->nullable();
            $table->string('status')->nullable();
            $table->string('featured')->nullable();
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
        Schema::dropIfExists('images');
    }
}
