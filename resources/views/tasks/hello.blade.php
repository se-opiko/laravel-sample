<div>
  <form>
  {{-- <form method="task" > --}}
      こんにちは{{$name}}さん
      タイトル：<input type="text" name="name" value="{{ $name }}">
      <br>
      ニックネーム<input type="text" name="nickname">
      <input type="submit" value="登録する">
  </form>
</div>