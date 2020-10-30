<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>タスク詳細 </h1>
        <p>
        <b>【タイトル】<br>{{ $task->title }}</b>
        </p>

    <div style="display:inline-flex">
        <a href="/tasks/"><button>一覧へ戻る</button></a>
        <a href="/tasks/{{ $task->id}}/edit"><button>編集する</button></a> 
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <a><input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};"></a>
        </form>
    
    </div>
</body>
</html>
