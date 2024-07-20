<div>
  <h1>詳細画面</h1>
  <div>
    <a href="{{route('tasks.index')}}">一覧に戻る</a>
    <a href="{{route('tasks.edit', $task)}}">編集へ</a>
  </div>
  {{-- タイトル --}}
  <div>
    <span>タイトル</span>
    <br />
    <span>{{ $task->title}}</span>
  </div>
  {{-- メモ --}}
  <div>
    <span>メモ</span>
    <br />
    <span>{{ $task->description}}</span>
  </div>
</div>