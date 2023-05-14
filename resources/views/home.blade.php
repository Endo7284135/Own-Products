@extends('adminlte::page')

@section('content')
<style>
    .small-img {
        width: 200px;
        height: 130px;
        max-width: 30%;
        border-style:groove;
    }
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }
    .image-container {
        text-align: center;
    }
    .image-container img {
        margin: 10px;
    }
    .system-title {
        font-size: 30px;
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
        background-color: #CCFFFF;
        font-weight: bold;
    }
    .document-title{
        font-size: 15px;
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .access-count{
        font-size: 10px;
        text-align: center;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="system-title">
                Welcome to our site K-selections
        </div>
            <!-- アクセスカウント はじめ-->
            <div class="access-count">
            <p>(仮)あなたは〇〇人目のアクセス者です</p>
            </div>
            <!-- アクセスカウント おわり-->
            <!-- ページ紹介 はじめ-->
            <div class="document-title">
            <p>世の中にはファッションブランドがたくさんありますよね</p>
            <div style=”line-height:1;”><b>「服が欲しいけど、どこで買えば良いのかわからない」<br>「ファッション雑誌に載っている服は値段が高すぎる」</b></div>
            <p>と悩んでいる方も多いのではないでしょうか</p>
            <p>K-selectionsでは数えきれない程存在するファッションブランドの中から<br>皆さんにおすすめするブランドを厳選してご紹介します</p>
            </div>
            <!-- ページ紹介 おわり-->
        </div>
        <br>
        <div class="image-container clearfix">
            <img src="/images/jacket.png" class="small-img">
            <img src="/images/jeans.png" class="small-img">
            <img src="/images/necktie.png" class="small-img">
            <img src="/images/shirt.png" class="small-img">
            <img src="/images/poloshirt.png" class="small-img">
            <img src="/images/glass.png" class="small-img">
        </div>
    </div>
</div>

@endsection

@section('js')
    <script>
    const div = document.querySelector('div')
    div.animate([{opacity: '0'}, {opacity: '1'}], 200)
    </script>
@stop

