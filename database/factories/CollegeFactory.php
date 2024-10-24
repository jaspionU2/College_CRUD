<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\College>
 */
class CollegeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::Create('pt_BR');

        $companyName = $faker->company;

        return [
            'nome' => $companyName . ' College',
            'telefone' => $faker->e164PhoneNumber(),
            'email' => strtolower(str_replace([' ', '-', '.', ','], '', $companyName)) . '@gmail.com',
        ];
    }
}
