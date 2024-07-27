<!DOCTYPE html>
<html lang="ja">

  <head>
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
  </head>

  <body>
    <div class="mt-3 ms-4">
      <a class="btn btn-outline-dark" href="{{ route("tasks.index") }}" role="button">一覧へ戻る</a>
    </div>
    <div class="container mt-4 d-flex justify-content-center">
      <form method="post" action="{{ route("tasks.store") }}">
        @csrf
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="title" id="floatingInputTitle">
          <label for="floatingInputTitle">タイトル</label>
          @error("title")
            <strong class="text-danger">{{ $message }}</strong>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <textarea type="text" class="form-control" name="description" id="floatingTextareaMemo"></textarea>
          <label for="floatingTextareaMemo">メモ</label>
          @error("description")
            <strong class="text-danger">{{ $message }}</strong>
          @enderror
        </div>
        <div class="d-flex justify-content-end">
          <input class="btn btn-primary" type="submit" value="登録">
        </div>
      </form>
    </div>
  </body>

</html>
