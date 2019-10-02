@extends('community.base')
@section('title', 'Community-Post')
@section('various_css')
<link rel="stylesheet" href="{{ asset('assets/css/community/post.css') }}">
@endsection
@section('content')
<h2>ここからスペシャリストに質問できます。</h2>
<div class='intro-body'>
    <div class="post-content">
        @if ($post)
            <form action="{{ action('CommunityController@store', $post->id) }}" method="post">
                {{ csrf_field() }}
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="ここにタイトル入力" value="{{ $post->title }}">
                <br>
                <label for="text">Text</label>
                <textarea name="text" cols="50" rows="50" placeholder="ここに本文入力">{{ $post->text }}</textarea>
                <button type="submit" name="store">Store</button>
            </form>
        @else
            <form action="{{ url('/community/post') }}" method="post">
                {{ csrf_field() }}
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="ここにタイトル入力">
                <br>
                <label for="text">Text</label>
                <textarea name="text" cols="50" rows="50" placeholder="ここに本文入力"></textarea>
                <button type="submit" name="store">Store</button>
            </form>
        @endif
    </div>
</div>
@endsection