<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプル01</title>
</head>

<body>
<header>
    <nav>
        <div>
            <a href="{{route('sample01')}}">サンプル01アプリ</a>
        </div>
    </nav>
</header>

<main>
    <article>
        <div>
            <h1>投稿内容</h1>
            <ul>
                <li>データ1：{{$_POST['data01']}}</li>
                <li>データ2：{{$_POST['data02']}}</li>
                <li>データ3：{{$_POST['data03']}}</li>
            </ul>
            <a href="{{route('sample01')}}">戻る</a>
        </div>
    </article>
</main>

<footer>
    <p>&copy; サンプル01アプリ All rights reserved.</p>
</footer>
</body>

</html>
