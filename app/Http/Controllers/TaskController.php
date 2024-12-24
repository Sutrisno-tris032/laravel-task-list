<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function index()
    {
        return view('index', [
            'tasks' => Task::latest()->get()
        ]);
    }

    public function getTaskDetail($id)
    {
        return view('taskDetail', [
            'task' => Task::findOrFail($id)
        ]);
    }

    public function newTask()
    {
        return view('createTask');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'long_description' => 'required'
        ]);

        $task = new Task();
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->long_description = $data['long_description'];
        $task->save();

        return redirect()->route('tasks.list')->with('success', 'Task Created Successfully');
    }

    public function updateTask($id)
    {
        return view('editTask', [
            'task' => Task::findOrFail($id)
        ]);
    }

    public function storeUpdateTask($id, Request $request)
    {


        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'long_description' => 'required'
        ]);

        $task =  Task::findOrFail($id);
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->long_description = $data['long_description'];
        $task->save();

        return redirect()->route('tasks.list')->with('success', 'updated Successfully');
    }
}
