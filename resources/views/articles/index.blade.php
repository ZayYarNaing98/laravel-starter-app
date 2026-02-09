<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @php
        $articles = [
            [
                'id' => 1,
                'title' => 'First Article',
                'content' => 'This is the content of the first article.'
            ],
            [
                'id' => 2,
                'title' => 'Second Article',
                'content' => 'This is the content of the second article.'
            ],
            [
                'id' => 3,
                'title' => 'Third Article',
                'content' => 'This is the content of the third article.'
            ],
            [
                'id' => 4,
                'title' => 'Fourth Article',
                'content' => 'This is the content of the fourth article.'
            ],
            [
                'id' => 5,
                'title' => 'Fifth Article',
                'content' => 'This is the content of the fifth article.'
            ]
        ];
    @endphp --}}

    <h1>Articles</h1>
    {{-- {{ dd($articles) }} --}}
    <ul>
        @foreach ($articles as $article)
            <li>
                <h3>{{ $article['title'] }}</h3>
                <p>{{ $article['content'] }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
