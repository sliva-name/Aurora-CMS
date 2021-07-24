<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'url' => $this->faker->slug(),
            'short_text' => $this->faker->paragraph(),
            'full_text' => $this->faker->text(),
            'seo_title' => $this->faker->sentence(),
            'seo_description' => $this->faker->sentence(),
            'seo_keywords' => $this->faker->sentence(),
        ];
    }
}
