<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $bbsEntry->title }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $bbsEntry->title }}
        </h1>
        <div class="content">
            <div class="content_bbs">
                <h3>本文</h3>
                <p>{{ $bbsEntry->body }}</p>    
            </div>
        </div>
        <p class=name>投稿者　{{ $bbsEntry->author }}</p>
        <div class="footer">
            <a href="/home">戻る</a>
        </div>
    </x-app-layout>
</html>