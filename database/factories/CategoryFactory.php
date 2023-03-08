<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //seed here
            'user_id' => $this->faker->numberBetween(1, 30),
            'name_ar' => $this->faker->name,
            'name_en' => $this->faker->name,
            'description_ar' => $this->faker->text,
            'description_en' => $this->faker->text,
            'slug' => $this->faker->slug,
            'status' => $this->faker->numberBetween(0, 1),
            'restaurant_id' => $this->faker->numberBetween(1, 30),
            'image' => $this->faker->imageUrl(),
            'parent_id' => 0,
            'order' => $this->faker->numberBetween(0, 30),
            'type' => $this->faker->word,
            'icon' => $this->faker->imageUrl(),
            'color' => $this->faker->hexColor,


        ];
    }
}
