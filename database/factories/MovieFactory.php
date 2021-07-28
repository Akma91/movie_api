<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference_code' => Str::random(10),
            'title' => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'image' => $this->faker->imageUrl($width, $height, 'nightlife') , // password
            'production_year' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
