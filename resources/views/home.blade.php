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
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="system-title">
                Welcome to our site K-selections
        </div>
            <!-- ページ紹介 はじめ-->
            <div class="document-title">
            <p>在庫を持たない「完全受注生産」により衣類廃棄ゼロを実現<br>環境保護を重視しつつ、年齢を重ねても型にはまらずトレンドよりも<br>自分らしさを大事にしたい男性へ向けたブランド"K-selections"へようこそ</p>
            <p>このシステムでは当社が取り扱うブランドの情報取得が可能です</p>
            <!-- ページ紹介 おわり-->
            </div>
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

