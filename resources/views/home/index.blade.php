@extends('home.base')
@section('title', 'ProfSite')
@section('content')
<header>
    <h1>W e l c o m e</h1>
    <h1>t o</h1>
    <h1>T s u r u S i t e !!</h1>
</header>
<div class='intro-body'>
    <h2>Introduce Myself</h2>
    <dl>
        <div class='boxes'>
            <dt><h3>Name: Tsuruchian</h3></dt>
            <dd>国立理系大学休学中の２５歳。Web開発、機械学習、データ分析に興味がある。<br>
                実務未経験だが独学で勉強しており自主性と向上心だけはありますので、よろしくお願いいたします。<br>
            </dd>
        </div>
        <div class='boxes'>
            <dt><h3>Contact Me</h3></dt>
            <dd>
                <li>Twitter:url</li>
                <li>MailAddress: @gmail.com</li>
                <li>Gihub: aaaa</li>
            </dd>
        </div>
    </dl>
    <h2>portfolio</h2>
    <dl>
        <div class='boxes'>
        <dt><a href="{{ url('/community')}}"><h3>スペシャリスト相談コミュニティ</h3></a></dt>
            <dd>あらゆる知識を持つ人たちとその知識やアドバイスを受けたい人たちをマッチングさせるサイト</dd>
        </div>
        </dl>
    </div>
@endsection