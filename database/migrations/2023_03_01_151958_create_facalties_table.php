<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacaltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facalties', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id');
            $table->integer('category_id');
            $table->string('employee');
            $table->string('email');
            $table->string('phone');
            $table->text('image');
            $table->longText('description');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('facalties');
    }
}
