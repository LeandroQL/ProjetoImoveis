<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Details extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('price');
            $table->string('area');
            $table->integer('dorms');
            $table->integer('suite');
            $table->integer('bathrooms');
            $table->integer('rooms');
            $table->integer('garage');
            $table->text('description');
            // $table->string('image');
            $table->timestamps();
            $table->unsignedInteger('property_id');

            $table->foreign('property_id')->references('id')->on('properties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
