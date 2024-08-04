<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskManageController;
use App\Models\Task;

Route::resource('tasks', TaskManageController::class);

