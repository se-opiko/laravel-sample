<!DOCTYPE html>
<html>

<body>
<div>
  <h1>一覧画面</h1>
  <a href="{{route('tasks.create')}}">新規作成</a>

  <table border="1">
    <thead>
      <tr>
        <th>タイトル</th>
        <th>メモ</th>
        <th>ステータス</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($tasks as $task)
      <tr>
      <td>
        {{$task->title}}
      </td>
      <td>
        {{$task->description}}
      </td>
      <td>
        {{$task->status}}
      </td>
      <td>
        <a href="{{route('tasks.show', $task->id)}}"> 詳細</a>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
</body>
</html>