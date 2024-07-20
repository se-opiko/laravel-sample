<!DOCTYPE html>
<html lang="ja">

  <head>
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
  </head>

  <body>
    <div class="container mt-4">
      <div class="d-flex justify-content-between">
        <a class="btn btn-primary" href="{{ route("tasks.create") }}" role="button">新規作成</a>
        <div class="d-flex">
          <input type="text" class="form-control" aria-describedby="button-addon2">
          <button class="btn btn-primary" type="button" id="button-addon2">search
          </button>
        </div>
      </div>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">タイトル</th>
            <th scope="col">メモ</th>
            <th scope="col">ステータス</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tasks as $task)
            <tr onclick="location.href='{{ route("tasks.show", $task->id) }}'">
              <th scope="row">{{ $loop->iteration }}</th>
              <td>
                {{ $task->title }}
              </td>
              <td>
                {{ $task->description }}
              </td>
              <td>
                {{ $task->status }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>

</html>
