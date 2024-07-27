<!DOCTYPE html>
<html lang="ja">

  <head>
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
  </head>

  <body>
    <div class="container mt-4 d-flex justify-content-center">
      <form method="post" action="{{ route("tasks.update", $task) }}">
        @csrf
        @method("PUT")
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="title" value="{{ data_get($task, "title") }}"
            id="floatingInputTitle">
          <label for="floatingInputTitle">タイトル</label>
          @error("title")
            <strong class="text-danger">{{ $message }}</strong>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <textarea type="text" class="form-control" name="description" id="floatingTextareaMemo">{{ data_get($task, "description") }}</textarea>
          <label for="floatingTextareaMemo">メモ</label>
          @error("description")
            <strong class="text-danger">{{ $message }}</strong>
          @enderror
        </div>
        <div class="d-flex justify-content-between">
          <input class="btn btn-outline-dark" type="submit" value="キャンセル">
          <input class="btn btn-primary" type="submit" value="保存">
        </div>
      </form>
    </div>
  </body>

</html>
