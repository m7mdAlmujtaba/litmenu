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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('restaurant_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('location_id')->nullable();

            $table->text('order_content')->nullable();
            $table->string('order_price')->nullable();
            $table->string('order_status')->nullable();

            //delivery
            $table->string('delivery_user_id')->nullable();
            $table->string('delivery_price')->nullable();

            //payment
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->nullable();
            //note
            $table->string('note')->nullable();
            //total
            $table->string('total')->nullable();










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
        Schema::dropIfExists('orders');
    }
};
//list of fields
//[restaurant_id,user_id,location_id,order_content,order_price,order_status,payment_method,payment_status,delivery_user_id]