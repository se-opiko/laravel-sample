<!DOCTYPE html>
<html lang="ja">

  <head>
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
  </head>

  <body>
    @php
      use App\Helpers\Label;
    @endphp
    <div class="mt-3 ms-4">
      <a class="btn btn-outline-dark" href="{{ route("tasks.index") }}" role="button">一覧へ戻る</a>
    </div>
    <div class="container mt-4 d-flex justify-content-center">
      <div>
        <div class="d-flex justify-content-end">
          <a class="btn btn-outline-dark me-2" href="{{ route("tasks.edit", $task) }}">
            <i class="bi bi-pencil"></i>
          </a>
          <form method="post" action="{{ route("tasks.destroy", $task) }}">
            @csrf @method("delete")
            <button class="btn btn-outline-dark" type="submit">
              <i class="bi bi-trash"></i>
            </button>
          </form>
        </div>
        {{-- タイトル --}}
        <div class="form-floating mb-3">
          <input type="text" readonly class="form-control-plaintext" id="floatingInputTitle"
            value="{{ $task->title }}">
          <label for="floatingInputTitle">タイトル</label>
        </div>
        {{-- メモ --}}
        <div class="form-floating mb-3">
          <textarea readonly class="form-control-plaintext" type="text" name="description" id="floatingTextareaMemo">{{ $task->description }}</textarea>
          <label for="floatingTextareaMemo">メモ</label>
        </div>
        {{-- ステータス --}}
        <div class="form-floating mb-3">
          <input readonly type="text" class="form-control-plaintext" name="status" id="floatingSelectStatus"
            value="{{ Label::getStatusLabel($task->status) }}">
          </input>
          <label for="floatingSelectStatus">ステータス</label>
        </div>
      </div>
    </div>
  </body>

</html>
