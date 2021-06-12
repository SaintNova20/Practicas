<?php

namespace Database\Factories;

use App\Models\Credit;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CreditFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Credit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text,
            'amount' => $this->faker->randomDigit,
            'clientid' => $this->faker->numberBetween(1,100),
            'date' => Carbon::now()->format('Y-m-d')
        ];
    }
}
