<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\News;

class NewsFactory extends Factory
{
    protected $model = News::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'date_de_publication' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
