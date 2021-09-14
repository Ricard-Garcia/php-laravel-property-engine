<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('imageURL');
            $table->text('street');
            $table->string('number');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            // $table->string('status');
            $table->string('type');
            $table->text('description');
            $table->string('contact_mail');
            $table->string('contact_phone');
            $table->string('condition');
            $table->string('room');
            $table->string('bath');
            // $table->string('size');
            $table->integer('price');
            $table->boolean('pet');
            $table->boolean('lift');
            $table->boolean('garden');
            $table->boolean('air_conditioning');
            $table->boolean('swimming_pool');
            $table->boolean('terrace');
            $table->string('publication_date');
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
        Schema::dropIfExists('properties');
    }
}
