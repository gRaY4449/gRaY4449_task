@extends('layouts.main')
@section('title', 'タスク詳細')
@section('content')
    <h1>タスク詳細</h1>

    <form>
        <div>
            <label for="title">【タイトル】</label><br>
            <input type="text" title="title id="title" value="{{ $task->title }}" readonly>
        </div>
        <div>
            <label for="body">【内容】</label><br>
            <textarea name="boyd" id="body" cols="30" rows="10" readonly>{{ $task->body }}</textarea>
        </div>
    </form>

    <div class="bottons">
        <form action="{{ route('tasks.index') }}">
            <button type="submit">一覧へ戻る</button>
        </form>
        <form action="{{ route('tasks.edit', $task) }}">
            <button type="submit">編集する</button>
        </form>
        <form action="{{ route('tasks.destroy', $task) }}" method="post" name="form1" style="display: inline">
            @csrf
            @method('delete')
            <button type="submit" onclick="if(!confirm('削除していいですか?')){return false}">削除する</button>
        </form>
    </div>
@endsection
