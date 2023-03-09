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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //user_id
            $table->unsignedBigInteger('user_id')->nullable();
            //restaurant_id
            $table->unsignedBigInteger('restaurant_id')->nullable();
            //category_id
            $table->unsignedBigInteger('category_id')->nullable();

            //name_ar
            $table->string('name_ar')->nullable();
            //name_en
            $table->string('name_en')->nullable();
            //description_ar
            $table->text('description_ar')->nullable();
            //description_en
            $table->text('description_en')->nullable();
            //slug
            $table->string('slug')->nullable();
            //status int
            $table->integer('status')->default(0);
            //image
            $table->string('image')->nullable();
            //price
            $table->double('price')->nullable();
            //discount
            $table->double('discount')->nullable();
            //discount_type
            $table->string('discount_type')->nullable();
            //discount_start
            $table->date('discount_start')->nullable();
            //discount_end
            $table->date('discount_end')->nullable();
            //order
            $table->integer('order')->default(0);
                        
         


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
        Schema::dropIfExists('products');
    }
};
//fields as list
// ['user_id', 'restaurant_id', 'category_id', 'name_ar', 'name_en', 'description_ar', 'description_en', 'slug', 'status', 'image', 'price', 'discount', 'discount_type', 'discount_start', 'discount_end', 'order']