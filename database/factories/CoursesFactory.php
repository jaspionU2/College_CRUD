<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

    // srand(time());

    // $randomizerFieldOfKnow = rand(0, 7);
    // $randomizerCourses = rand(0, 3);

     $cursoAreasDoConhecimento = [
            'Engenharia Civil',
            'Engenharia de Software',
            'Ciência da Computação',
            'Física' ,
            'Psicologia',
            'Filosofia',
            'História',
            'Ciências Sociais' ,
            'Medicina',
            'Enfermagem',
            'Biomedicina',
            'Nutrição',
            'Agronomia',
            'Medicina Veterinária',
            'Zootecnia',
            'Gestão Ambiental' ,
            'Administração',
            'Economia',
            'Direito',
            'Jornalismo',
            'Design Gráfico',
            'Música',
            'Cinema e Audiovisual',
            'Moda',
            'Análise e Desenvolvimento de Sistemas',
            'Segurança da Informação',
            'Big Data e Ciência de Dados',
            'Engenharia de Computação',
            'Geologia',
            'Oceanografia',
            'Engenharia Ambiental',
            'Ecologia' 
    ];
        

        return [
            'nome' => $this->faker->randomElement($cursoAreasDoConhecimento),
            'descricao' => $this->faker->text(100),
            'carga_horaria' => $this->faker->numberBetween(60, 400)
        ];
    }
}
