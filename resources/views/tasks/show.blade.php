@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->statust }}</td>
        </tr>
    </table>

    {!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $task->id]) !!}
    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-lg-offset-6">
            {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                {!! Form::submit('削除') !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection