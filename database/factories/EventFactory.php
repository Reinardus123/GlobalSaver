<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(fn($p)=>"<p>$p</p>")->implode(''),
            'price' => $this->faker->randomFloat(0 ,5000,10000),
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,2)
        ];
    }
}
