<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso; // Assumindo que o Model se chama Curso

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define uma lista de matérias e professores para garantir dados mais realistas
        $subjects = ['Matemática Avançada', 'Língua Portuguesa', 'História Contemporânea', 'Desenvolvimento Web', 'Física Quântica'];
        $professors = ['Prof. Silva', 'Dra. Almeida', 'Mestre Souza', 'Professora Costa'];

        // Gera uma data de início aleatória no passado recente
        $startDate = $this->faker->dateTimeBetween('-1 year', 'now');

        return [
            'materia' => $this->faker->randomElement($subjects),
            'professor' => $this->faker->randomElement($professors),
            // A data final deve ser depois da data de início
            'final' => $this->faker->dateTimeBetween($startDate, '+1 year')->format('Y-m-d'),
            'inicio' => $startDate->format('Y-m-d'),
            'ativo' => $this->faker->boolean(80), // 80% de chance de ser true
        ];
    }
}

