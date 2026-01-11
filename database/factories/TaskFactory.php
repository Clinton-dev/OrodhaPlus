<?php

namespace Database\Factories;

use App\Models\Board;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'status' => fake()->randomElement(['pending', 'inProgress', 'completed', 'wontDo']),
            'icon' => fake()->randomElement(['study', 'message', 'tea','workout','study','clock']),
            'board_id' => Board::factory(),
        ];
    }
}
