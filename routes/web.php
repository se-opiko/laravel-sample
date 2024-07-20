<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskManageController;
use App\Models\Task;


Route::get('/', function () {
    // return view('welcome');
    $tasks = Task::get();
    dd($tasks);
});

Route::get('tasks/hello', [TaskManageController::class, 'index']);
// Route::get('tasks/create', [TaskManageController::class, 'create']);
// Route::get('tasks/create/{title}/{description?}', [TaskManageController::class, 'create']);
// Route::get('tasks/create/{title}/{description?}', function ($title, $description = 'テスト') {
//     return $title. '---' .$description;
// });

Route::resource('tasks', TaskManageController::class);

// Route::post('tasks/store', [TaskManageController::class, 'store'])->name('tasks.store');

