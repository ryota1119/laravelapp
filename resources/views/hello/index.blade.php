<html>
<head>
    <title>Hello/index</title>
    <style>
        body { font-size: 16px; color: #999; }
        h1 { font-size: 100px; text-align: right; color: #f6f6f6; margin: -50px 0px -100px 0px; }
    </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <p>&#064;forディレクティブの例</p>
    @foreach ($data as $item)
        @if ($loop->first)
            <p>※データ一覧 {{ $loop->count }}個</p><ul>
        @endif
        <li>No,{{ $loop->iteration }}. {{ $item }}</li>
        @if ($loop->last)
        </ul><p>--ここまで</p>
        @endif
    @endforeach
</body>
</html>
