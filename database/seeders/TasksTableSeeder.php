<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generar 10 tareas de prueba
        for ($i = 1; $i <= 10; $i++) {
            Task::create([
                'name' => "Task test {$i}",
                'completed' => rand(0, 1)
            ]);
        }
    }
}
