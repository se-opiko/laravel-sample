<!DOCTYPE html>
<html lang="ja">

  <head>
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
  </head>

  <body>
    @php
      use App\Helpers\Label;
    @endphp
    <div class="container mt-4">
      <div class="d-flex justify-content-end">
        <a class="btn btn-outline-dark" href="{{ route("tasks.create") }}" role="button"><i class="bi bi-plus-lg"></i></a>
        <form method="get" action="{{ route("tasks.index") }}">
          <div class="d-flex ps-2">
            <input type="text" class="form-control" aria-describedby="button-addon2" name="search"
              value="{{ $search }}">
            <button class="btn btn-primary" type="submit" id="button-addon2"><i class="bi bi-search"></i>
            </button>
          </div>
        </form>
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
                {{ Label::getStatusLabel($task->status) }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>

</html>
