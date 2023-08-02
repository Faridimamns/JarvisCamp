<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {

        //include data Task model
        $tasks = Task::getAll();

        // return to view data
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function show($id)
    {
        $task = Task::getById($id);

        if (!$task) {
            return redirect()->route('task.index')->with('error', 'Tugas tidak ada');
        }

        return view('tasks.viewTask', compact('task'));

    }
}
