<h1>タスク一覧</h1>


<table class="table tabel-striped">
  <thead>
    <tr>
      <th>タスク内容</th>
      <th>状態</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($tasks as $task)
    <tr>
      <td>{!! link_to_route('tasks.show', $task->content, ['task' => $task->id]) !!}</td>
      <td>{{ $task->status }}</td>
    </tr>
    @endforeach
  </tbody>
</table>


{!! link_to_route('tasks.create', '新規登録', [], ['class' => 'btn btn-primary']) !!}