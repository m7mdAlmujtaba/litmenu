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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            //user_id
            $table->unsignedBigInteger('user_id')->nullable();
            //restaurant_id
            $table->unsignedBigInteger('restaurant_id')->nullable();
            // restaurant_rating
            $table->integer('restaurant_rating')->nullable();
            // order_id
            $table->unsignedBigInteger('order_id')->nullable();
            //delivery_id
            $table->unsignedBigInteger('delivery_id')->nullable();
            // delivery_rating
            $table->integer('delivery_rating')->nullable();
            // comment
            $table->text('comment')->nullable();
            
            


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
        Schema::dropIfExists('ratings');
    }
};
