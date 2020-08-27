@extends('layouts.app')

@section('content')

<h1>{{ $task->content }} の詳細ページ</h1>

<table class="table table-bordered">
  <tr>
    <th>タスク:</th>
    <td>{{ $task->content }}</td>
  </tr>
  <tr>
    <th>状態:</th>
    <td>{{ $task->status }}</td>
  </tr>
</table>

{!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}

{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
{!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@endsection