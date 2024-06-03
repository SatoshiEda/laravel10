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
            <h1>サンプル01一覧</h1>
        </div>
    </article>
    <article>
        <div>
            <h1>投稿</h1>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color:red;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('sample01.post')}}" method="post">
                <div><label>データ1：</label><input type="text" name="data01" value="{{ old('data01') }}"></div>
                <div><label>データ2：</label><input type="text" name="data02" value="{{ old('data02') }}"></div>
                <div><label>データ3：</label><input type="text" name="data03" value=""></div>
                <div><input type="submit" value="投稿"></div>
                @csrf
            </form>
        </div>
    </article>
</main>

<footer>
    <p>&copy; サンプル01アプリ All rights reserved.</p>
</footer>
</body>

</html>
