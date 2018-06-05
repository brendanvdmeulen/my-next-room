<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('length')->nullable()->unsigned();
            $table->integer('width')->nullable()->unsigned();
            $table->string('deposit');
            $table->integer('rent');
            $table->integer('lease_term_min')->nullable()->unsigned();
            $table->integer('lease_term_max')->nullable()->unsigned();
            $table->string('payment_scheme_id');
            $table->string('location_id');
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
        Schema::dropIfExists('rooms');
    }
}
