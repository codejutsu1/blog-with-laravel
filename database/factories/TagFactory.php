<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Tag::class;


    public function definition()
    {
        return [
            'article_id' => rand(1, 100),
            'tag' => $this->faker->words(4, true)
        ];
    }
}
