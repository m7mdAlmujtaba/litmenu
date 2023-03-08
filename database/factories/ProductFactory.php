<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'price' => $this->faker->numberBetween(1, 100),
            'discount' => $this->faker->numberBetween(1, 100),
            'image' => $this->faker->imageUrl(),
            'status' => $this->faker->numberBetween(0, 1),
            'slug' => $this->faker->slug,
            'restaurant_id' => $this->faker->numberBetween(1, 30),
            'category_id' => $this->faker->numberBetween(1, 30),
            'user_id' => $this->faker->numberBetween(1, 30),

            
        ];
    }
}
