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
        Schema::create('restaurants', function (Blueprint $table) {
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
            //phone
            $table->string('phone')->nullable();
            //whatsapp
            $table->string('whatsapp')->nullable();
            //email
            $table->string('email')->nullable();
            //address_ar
            $table->text('address_ar')->nullable();
            //address_en
            $table->text('address_en')->nullable();
            //lat double
            $table->double('lat')->nullable();
            //lng double
            $table->double('lng')->nullable();
            //logo
            $table->string('logo')->nullable();
            //cover
            $table->string('cover')->nullable();
            //status int
            $table->integer('status')->default(0);
            //slug
            $table->string('slug')->nullable();
            //slogan_ar
            $table->string('slogan_ar')->nullable();
            //slogan_en
            $table->string('slogan_en')->nullable();
            //facebook
            $table->string('facebook')->nullable();
            //twitter
            $table->string('twitter')->nullable();
            //instagram
            $table->string('instagram')->nullable();
            //youtube
            $table->string('youtube')->nullable();
            //snapchat
            $table->string('snapchat')->nullable();
            //telegram
            $table->string('telegram')->nullable();
            //tiktok
            $table->string('tiktok')->nullable();



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
        Schema::dropIfExists('restaurants');
    }
};
//fillable field list 
// ['user_id', 'name_ar', 'name_en', 'description_ar', 'description_en', 'phone', 'whatsapp', 'email', 'address_ar', 'address_en', 'lat', 'lng', 'logo', 'cover', 'status', 'slug', 'slogan_ar', 'slogan_en', 'facebook', 'twitter', 'instagram', 'youtube', 'snapchat', 'telegram', 'tiktok']