<!DOCTYPE html>
<html lang='ja'>
<head>
    <meta charset='utf-8'>
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('/assets/css/home.css')}}">
</head>
<body>
    <div class='container'>
    @yield('content')
    </div>
</body>