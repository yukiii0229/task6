@extends('layouts.default')
<style>
   body{
      background-color: violet;
    }
    button {
    }
</style>
@section('content')

    <div class="panel-body">
        <!-- バリデーションエラーの表示 -->
        @include('common.errors')

        <div class="ttl">
            <h1 class="ttl-main">Todo List</h1>
        </div>
        <!-- タスク追加ボタン -->
        <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> タスク追加
                    </button>
                </div>
        </div>
        <div>
        
        <!-- 新タスクフォーム -->
        <form action="/todo/create" method="POST" class="form-horizontal">
            {{ csrf_field() }}
        <ul class="">

            <!-- タスク名 -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">タスク</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>
        </form>
    </div>
    <td>
        <form action="{{ url('task/'.$task->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> 削除
            </button>
        </form>
    </td>
    <!-- TODO: 現在のタスク -->
@endsection