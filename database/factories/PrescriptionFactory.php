<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrescriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = now();
        $newdate = date('Y-m-d', strtotime($date. ' + 3 months'));
        return [
            'medicine' => $this->faker->text(50),
            'user_id' => '1',
            'expire_at' => $newdate,
            'code' => rand(0,9999)
        ];
    }
}
