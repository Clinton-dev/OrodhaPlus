<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Task;
use App\Models\User;
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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $board = Board::factory()->create([
            'name' => 'Default Board',
            'description' => 'Tasks to keep organized'
        ]);

        $defaultTasks = [
            ['name' => 'Task in progress', 'icon' => 'clock', 'status' => 'inProgress', 'description' => 'A task currently being worked on'],
            ['name' => 'Task Completed', 'icon' => 'workout', 'status' => 'completed', 'description' => 'A task that has been finished'],
            ['name' => "Task Won't Do", 'icon' => 'tea', 'status' => 'wontDo', 'description' => 'A task that will not be completed'],
            ['name' => 'Task To do', 'icon' => 'study', 'status' => 'pending', 'description' => 'A task waiting to be started'],
        ];

        foreach ($defaultTasks as $taskData) {
            Task::create(array_merge($taskData, ['board_id' => $board->id]));
        }
    }
}
