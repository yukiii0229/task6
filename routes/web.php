<?php

use App\Task;
use Illuminate\Http\Request;

/**
 * タスクダッシュボード表示
 */
Route::get('/', function () {
    return view('tasks');
});

/**
 * 新タスク追加
 */
Route::post('/todo/create', function (Request $create) {
    $validator = Validator::make($create->all(), [
        'content' => 'required|max:20',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $create->content;
    $task->save();

    return redirect('/');
});
/**
 * 新タスク更新
 */
Route::post('/todo/update', function (Request $update) {
    //
});
/**
 * タスク削除
 */
Route::delete('/todo/delete', function (Task $delete) {
    //
});