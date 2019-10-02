<!DOCTYPE html>
<html lang='ja'>
<head>
    <meta charset='utf-8'>
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('/assets/css/community/base.css') }}">
@yield('various_css')
</head>
<body>
    <header>
    <a href="{{ url('/community') }}"><h1>Knowledge Community</h1></a>
    <div class='boxes'>
        <p><a href="{{ url('/community/about') }}">About</a></p>
        <p><a href="{{ url('/community/find') }}">Find</a></p>
        <p><a href="{{ url('/community/post') }}">Post</a></p>
    </div>
    </header>
    <div class='container'>
    @yield('content')
    </div>
<div class="boxes">
    <p><a href="{{ url('/') }}">Profに戻る</a></p>
</div>
</body>