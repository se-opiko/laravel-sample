<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskManageController extends Controller
{
    // 一覧画面の表示
    public function index(Request $request) 
    {
        $search = $request->input('search');
        if(filled($search)) {
            $tasks = Task::where('title', 'like', "%{$search}%")
             ->orWhere('description', 'like', "%{$search}%")
             ->get();
        } else {
            $tasks = Task::get();
        }
        return view('tasks.index', compact('tasks', 'search'));
    }

    // 新規登録画面の表示
    public function create() 
    {

        return view('tasks.create');
    }

    // 新規登録処理
    public function store(Request $request) 
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'description' => ['nullable','string', 'max:1000']
        ]);

        Task::create($data);
        // tasks()->create($data);
        return to_route('tasks.index');
    }

    // 詳細画面の表示
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }

    // 編集画面の表示
    public function edit(Task $task)
    {
        // $data = old() ?: $task;

        return view('tasks.edit', compact('task'));
    }

    // 更新処理
    public function update(Request $request, Task $task)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'description' => ['string', 'max:1000']
        ]);

        $task->update($data);

        return to_route('tasks.show', $task);

    }
    
    // 削除処理
    public function destroy(Task $task)
    {
        $task->delete();
        return to_route('tasks.index');
    }
}
