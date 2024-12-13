<?php

use App\Models\Task as ModelsTask;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;


// from database
Route::get('task/{task_id}', function ($id) {
  return view('taskDetail', [
    'task' => ModelsTask::findOrFail($id)
  ]);
})->name('tasks.show');


Route::get('/tasks', function () {
  return view('index', [
    'tasks' => ModelsTask::latest()->where('completed', true)->get()
  ]);
})->name('tasks.list');


