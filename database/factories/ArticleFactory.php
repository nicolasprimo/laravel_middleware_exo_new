<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = $this->faker;
        return [
            "titre" => $faker->sentence($nbWords = 6, $variableNbWords = true),
            "texte" => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            "user_id" => mt_rand(1, 2)
        ];
    }
}
