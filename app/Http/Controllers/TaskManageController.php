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
        // $data = $request->only(['name', 'nickname']);
        // $data = $request->all(['name', 'nickname']);
        // $data = $request->all();
        // dump($data);
        // $name = $request->input('name', 'デフォルト値');
        // return view('tasks/hello', ['name' => $name]);
        $tasks = Task::get();
        return view('tasks.index', compact('tasks'));
    }

    // 新規登録画面の表示
    public function create() 
    {

        return view('tasks.create');
    }
    // public function create($title, $description = 'メモ')
    // {
    //     return $title. '---' .$description;
    // }

    // 新規登録処理
    public function store(Request $request) 
    {
        // TODO:validateについて調べる
        $data = $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'description' => ['string', 'max:1000']
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
        // 
    }
    
    // 削除処理
    public function destroy(Task $task)
    {
        // 
    }
}
