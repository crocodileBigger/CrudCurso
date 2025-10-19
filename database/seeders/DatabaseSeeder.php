<?php

namespace Database\Seeders;

use App\Models\aluno;
use App\Models\curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        aluno::factory(8)->create();
        curso::factory(8)->create();
    }
}
