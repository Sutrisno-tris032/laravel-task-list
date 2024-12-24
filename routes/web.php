<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

// with controller=
Route::get("/", [App\Http\Controllers\TaskController::class, 'index'])->name('tasks.list');
Route::get('task/{id},', [App\Http\Controllers\TaskController::class, 'getTaskDetail'])->name('tasks.show');
Route::get('task/new', [App\Http\Controllers\TaskController::class, 'newTask'])->name('tasks.create');
Route::post('task/store', [App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store');
Route::get('task/{id}/edit', [App\Http\Controllers\TaskController::class, 'updateTask'])->name('tasks.edit');
Route::put('task/{id}/update', [App\Http\Controllers\TaskController::class, 'storeUpdateTask'])->name('tasks.update');



// from database
// Route::get('task/{task_id}', function ($id) {
//   return view('taskDetail', [
//     'task' => ModelsTask::findOrFail($id)
//   ]);
// })->name('tasks.show');

// Route::get('/tasks', function () {
//   return view('index', [
//     'tasks' => ModelsTask::latest()->get()
//   ]);
// })->name('tasks.list');

// Route::post('/task/store', function (Request $request) {
//    $data = $request->validate([
//     'title' => 'required|max:255',
//     'description' => 'required',
//     'long_description' => 'required'
//    ]);
   
//    $task = new ModelsTask;
//    $task->title = $data['title'];
//    $task->description = $data['description'];
//    $task->long_description = $data['long_description'];
//    $task->save();
   
//    return redirect()->route('tasks.list');

// })->name('tasks.store');

// Route::put('/task/{id}/update', function ($id, Request $request) {
//   $data = $request->validate([
//    'title' => 'required|max:255',
//    'description' => 'required',
//    'long_description' => 'required'
//   ]);
  
//   $task = ModelsTask::findOrFail($id);
//   $task->title = $data['title'];
//   $task->description = $data['description'];
//   $task->long_description = $data['long_description'];
//   $task->save();
  
//   return redirect()->route('tasks.list');

// })->name('tasks.update');

// Route::get('task/{task_id}/edit', function ($id) {
//   return view('editTask', [
//     'task' => ModelsTask::findOrFail($id)
//   ]);
// })->name('tasks.edit');

// Route::get('/tasks/create', function () {
//   return view('createTask');
// })->name('tasks.create');



// retrun view only 
