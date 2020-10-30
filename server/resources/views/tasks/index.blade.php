<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>タスク一覧</h1>
        @foreach ($tasks as $task)
        <!-- // リンク先をidで取得し名前で出力 -->
        <form action="/tasks" method="post">
            @csrf
            <div style="display:inline-flex">
            <li style="list-style: none;">
            <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
            </li>
        </form>
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
            </div>
        </form>
        @endforeach
    <hr>
        @if (count($errors) > 0)
            <div>
                <p>
                    <b>【エラーがあります｡】</b>
                </p>
                    <ul>
                        @foreach ($errors as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            </div>
        @endif
    <h1>新規論文投稿</h1>
        <form action="/tasks" method="post">
            @csrf
            <p>
                タイトル：<br>
            <input type="text" name="title" value="{{ old('title') }}">
            </p>
            <p>
                内容：<br>
                <textarea type="text" name="body" value="{{ old('body') }}"></textarea>
            </p>
            <input type="submit" value="Create Task">
        </form>