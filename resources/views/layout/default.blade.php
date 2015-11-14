<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebPage">
<head>
    <meta charset="utf-8" />
    <meta name="robots" content="all,follow" />
    <meta name="googlebot" content="index,follow,snippet,archive" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    @include('essential.head')
</head>
<body>
    @include('essential.header')
    @section('nav')
    @show
    @section('content')
    @show
    @include('essential.footer')
</body>
</html>