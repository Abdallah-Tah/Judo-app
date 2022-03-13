<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $avatar = $this->faker->randomElement(['male.png', 'female.png']);
        $gender = $this->faker->randomElement(['male', 'female']);

        if ($gender == 'male'){
            $avatar = 'male.png';
        }else{
            $avatar = 'female.png';
        }

        return [
            'user_id' => 1,
            'invoice_id' => $this->faker->randomElement([1,2,3]),
            'club_id' => $this->faker->randomElement([1,2,3]),
            'firstname' => $this->faker->firstname,
            'lastname' => $this->faker->lastname,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'gender' => $gender,
            'dob' => $this->faker->dateTimeBetween('1980-01-01', '2001-12-31'),
            'photo' => $avatar,
            'register_date' =>$this->faker->dateTime,

        ];
    }
}
