<div>
    <form method="post" action="{{route('tasks.store')}}">
        @csrf
        タイトル：<input type="text" name="title">
        メモ：<textarea type="text" name="description"></textarea>

        <input type="submit" value="登録する">
    </form>
</div>
