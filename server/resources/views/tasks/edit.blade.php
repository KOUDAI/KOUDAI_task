<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (count($errors) > 0)
        <div>
            <p>
                <b>【エラー内容】</b>
            </p>
                <p>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </p>
        </div>
    @endif

    <h1>投稿論文編集</h1>
    <form action="/tasks/{{ $task->id }}" method="post">
        @csrf
    @method('PUT')
        <input type="hidden" name="id" value="{{ $task->id }}">
        <p>
            論文タイトル<br>
            <input type="text" name="title" value="{{ $task->title }}">
        </p>
        <p>
            本文<br>
            <textarea type="text" name="body"{{ $task->body }}></textarea>
        </p>
            <input type="submit" value="更新">
    </form>
    <div style="display:inline-flex">
        <a href="/tasks/{{ $task->id }}"><button>詳細に戻る</button></a>
    </div> 
</body>
</html>
