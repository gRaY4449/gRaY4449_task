@extends('layouts.main')
@section('title', '投稿論文編集')
@section('content')
    <h1>投稿論文編集</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('tasks.update', $task) }}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="title">論文タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old("title", $task->title) }}">
        </div>
        <div>
            <label for="body">本文</label><br>
            <textarea name="body" id="body" cols="30" rows="10">{{ old("body", $task->body) }}</textarea>
        </div>
        <div>
            <input type="submit" value="修正">
        </div>
    </form>
@endsection
