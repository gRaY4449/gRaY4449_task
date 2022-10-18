@extends('layouts.main')
@section('title', 'タスク一覧')
@section('content')
    <h1>タスク一覧</h1>
    <ul class="task_list1">
        @foreach ($tasks as $task)
        <div class="task_list2">
                <li class="task_list3"><a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a></li>
            <form action="{{ route('tasks.destroy', $task) }}" method="post" name="form1" style="display: flex">
                @csrf
                @method('delete')
                <button type="submit" onclick="if(!confirm('削除していいですか?')){return false}">削除する</button>
            </form>
        </div>
        @endforeach
    </ul>
    <hr>

@section('title', '新規論文投稿')
    <h1>新規論文投稿</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <div>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="body">内容</label><br>
            <textarea name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
        </div>
        <div>
            <input type="submit" value="Create Task">
        </div>
    </form>
@endsection


