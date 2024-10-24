<?php

namespace Database\Seeders;

use App\Models\Courses;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Courses = Courses::all();

        $teachers = Teacher::all();

        if($Courses->isEmpty()){
            $Courses = Courses::factory(4)->create();
        }

        if ($teachers->isEmpty()) {
            $teachers = Teacher::factory(4)->create();
        }


        // Associar cursos aleatórios a cada professor
        $teachers->each(function ($teacher) use ($Courses) {
            // Obter os IDs dos cursos que já estão associados a este professor
            $existingCourseIds = $teacher->courses()->pluck('id')->toArray();

            // Filtrar os cursos disponíveis para evitar duplicação
            $availableCourses = $Courses->whereNotIn('id', $existingCourseIds);

            // Associar de 1 a 3 cursos aleatórios a cada professor, evitando duplicação
            $courseIdsToAttach = $availableCourses->random(rand(1, min(3, $availableCourses->count())))->pluck('id')->toArray();

            // Verificar se há IDs a serem associados
            if (!empty($courseIdsToAttach)) {
                $teacher->courses()->attach($courseIdsToAttach);
            }
        });
    }
}
