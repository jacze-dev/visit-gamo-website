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
        
 
        Schema::create('hotel', function (Blueprint $table) {
            $table->id();
            $table->string('hotels');
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('NoRooms');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('detail');
            $table->string('roomdetail');
            $table->string('links');
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
        Schema::dropIfExists('hotel');
    }
};
