@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
 <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
               <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}  : {{ $task->content }}: <tasks class="show"></tasks>{{ $task->status }}</li>
            @endforeach
        </ul>
    @endif
    {!! link_to_route('tasks.create', '新規タスクの追加') !!}

@endsection