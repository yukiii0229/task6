<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taskController extends Controller
{
    public function index()
    {
        $items = Task::all();
        return view('index', ['items' => $items]);
    }
    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        $item = Task::where('contene', 'LIKE',"%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }
    public function bind(Task $task)
    {
        $data = [
            'item'=>$task,
        ];
        return view('task.binds', $data);
    }
    public function add()
    {
        return view('task');
    }
    public function create(Request $request)
    {
        $this->validate($request, task::$rules);
        $form = $request->all();
        task::create($form);
        return redirect('/');
    }
}
