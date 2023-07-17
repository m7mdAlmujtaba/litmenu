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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
              //user_id
              $table->unsignedBigInteger('user_id')->nullable();
            
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
              //restaurant_id
              $table->unsignedBigInteger('restaurant_id')->nullable();
              //image
              $table->string('image')->nullable();
              //parent_id default 0
              $table->unsignedBigInteger('parent_id')->default(0);
              //order
              $table->integer('order')->default(0);
              //type
              $table->string('type')->nullable();
              //icon
              $table->string('icon')->nullable();
              //color
              $table->string('color')->nullable();
              
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
        Schema::dropIfExists('sections');
    }
};
