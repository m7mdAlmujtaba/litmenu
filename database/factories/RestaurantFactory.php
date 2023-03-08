<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // seed here
            'name_ar' => $this->faker->name,
            'name_en' => $this->faker->name,
            'description_ar' => $this->faker->text,
            'description_en' => $this->faker->text,
            'phone' => $this->faker->phoneNumber,
            'whatsapp' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'address_ar' => $this->faker->address,
            'address_en' => $this->faker->address,
            'lat' => $this->faker->latitude,
            'lng' => $this->faker->longitude,
            'logo' => $this->faker->imageUrl(),
            'cover' => $this->faker->imageUrl(),
            'status' => $this->faker->numberBetween(0, 1),
            'slug' => $this->faker->slug,
            'slogan_ar' => $this->faker->text,
            'slogan_en' => $this->faker->text,
            'facebook' => $this->faker->url,
            'twitter' => $this->faker->url,
            'instagram' => $this->faker->url,
            'youtube' => $this->faker->url,
            'user_id' => $this->faker->numberBetween(1, 30),
            'tiktok' => $this->faker->url,
            'snapchat' => $this->faker->url,
            
        ];
    }
}
