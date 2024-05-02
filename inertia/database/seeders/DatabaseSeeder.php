<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Task;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Gusis',
            'email' => 'gustavs@gmail.com',
            'password' => bcrypt('qwertyuiop')
        ]);

        Project::Factory()->count(100)->hasTasks(101)->create();
        // Task::Factory(101)->create();
    }
}
