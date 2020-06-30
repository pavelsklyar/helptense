<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="stylesheet" href="/css/live.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/search.js"></script>

    <title>@yield("title")</title>
</head>
<body>
    <div class="body">
        <div class="header">
            @include("elements.header")
        </div>

        <div class="content">
            @yield("content")
        </div>

        <div class="footer">
            @include("elements.footer")
        </div>
    </div>
</body>
</html>
