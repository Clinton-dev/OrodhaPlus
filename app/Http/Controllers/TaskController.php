<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Board $board,Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'icon' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        $task = $board->tasks()->create([
            'name' => $validated['title'] ?? "Untitled Task",
            'description' => $validated['description'] ?? null,
            'icon' => $validated['icon'] ?? "clock",
            'status' => $validated['status']?? "inProgress",
        ]);

        return redirect()->route('boards.show', $board);
    }

    public function show(Task $task)
    {

    }

    public function update(Request $request, Board $board)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Board $board)
    {
        //
    }
}
