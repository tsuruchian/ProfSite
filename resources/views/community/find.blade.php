@extends('community.base')
@section('title', 'Community-Find')
@section('various_css')
<link rel="stylesheet" href="{{ asset('assets/css/community/find.css') }}">
@endsection
@section('content')
<h2>ここからあなたが気になることを探しましょう。</h2>
<div class='intro-body'>
    <div class="find-filter">
        <p>ここ検索フィルター</p>
    </div>
    <dl class="find-container">
        <div class="find-content">
            @foreach ($posts as $post)
        <dt><h3><a href="{{ action("CommunityController@single", $post->id) }}">{{ $post->title }}</a></h3></dt>
        <dd>
            {{ $post->text }}<br>
            {{ $post->updated_at }}
        </dd>
            @endforeach
    </dl>
</div>
@endsection