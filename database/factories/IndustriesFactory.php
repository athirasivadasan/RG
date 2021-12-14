<?php

namespace Database\Factories;

use App\Models\Industries;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class IndustriesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Industries::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => Str::uuid(),
            'name' => $this->faker->name(),
            'status' => 1,
            'sorting' => $this->faker->unique()->randomDigit(1,5)
        ];
    }
}
