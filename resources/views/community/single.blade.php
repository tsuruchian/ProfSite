@extends('community.base')
@section('title', 'Community-Find')
@section('various_css')
<link rel="stylesheet" href="{{ asset('assets/css/community/find.css') }}">
@endsection
@section('content')
<h2>この記事ですかね？</h2>
<div class="single-content">
<h3>{{ $post->title }}</h3>
<p>{{ $post->text }}</p>
<p>{{ $post->updated_at }}</p>
<p><a href="{{ action('CommunityController@post', $post->id )}}">Edit</a></p>
<p><a href="{{ action('CommunityController@delete', $post->id )}}">Delete</a></p>
</div>
@endsection