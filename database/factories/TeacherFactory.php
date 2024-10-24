<?php

namespace Database\Factories;

use App\Models\College;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{

    protected $Model = Teacher::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $faker = \Faker\Factory::Create('pt_BR');
       $nameTeacher = $faker->name;
      
        return [
            'nome' => $nameTeacher,
            'telefone' => $this->faker->phoneNumber,
            'email' => strtolower(str_replace([' ', '.', '-', ','], '', $nameTeacher)) . '@gmail.com',
            'collegesId' => College::factory()
        ];
    }
}
