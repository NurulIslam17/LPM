<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImgOnliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_img_onlies', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->unsigned();
            $table->string('img_desc');
            $table->text('product_images');
            $table->foreign('product_id')->references('id')->on('productimgs')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('product_img_onlies');
    }
}
