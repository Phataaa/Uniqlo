<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_category', function(Blueprint $table) {
            $table->increments('id');
            $table->string('type_category');
            $table->integer('gender_id')->unsigned()->nullable();
            $table->foreign('gender_id')->references('id')->on('gender_category');
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
        Schema::dropIfExists('type_category');
    }
};