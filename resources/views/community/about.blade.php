@extends('community.base')
@section('title', 'About')
@section('various_css')
<link rel="stylesheet" href="{{ asset('assets/css/community/about.css') }}">
@endsection
@section('content')
<div class='intro-body'>
    <h2>Knowledge Communityについて</h2>
    <dl>
        <div class="about-content">
            <dt><h3>何か困ったことがあったり知りたいことがあるとき、いつでも質問できます。</h3></dt>
            <dd>
                例えば新しいスマートフォンに関すること、海外留学に関すること、受験勉強に関することでも、
                なんでもここでは聞くことができます。
            </dd>
        </div>
        <div class="about-content">
            <dt><h3>あなたの知識には価値があります。</h3></dt>
            <dd>
                あなたが仕事や趣味など、様々なことで得た知識をほかの方にも共有することで、
                あなたは対価を得ることができます。またここで自他ともに認めるスペシャリストになれば
                さらなる報酬も得ることができ、生活を豊かにすることができます。
            </dd>
        </div>
        <div class="about-content">
            <dt><h3>同じまたは異なるスペシャリストとつながることであなたはさらに成長します。</h3></dt>
            <dd>
                ここでは様々な人とかかわることができます。自分とは全く対極に位置する人であったり、
                、または考え方がうり二つの人もいるでしょう。そのような人たちとかかわることでさらにあなたの
                魅力は増大し、より価値のある知識へも結ぼつくでしょう。
            </dd>
    
    </dl>
</div>
@endsection