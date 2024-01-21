@extends('adminlte::page')

@section('title', 'バージョン情報')

@section('content_header')
    
@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="system-title">
                <h1>バージョン情報</h1>
        </div>
            <!-- ページ紹介 はじめ-->
        <div class="system-document">
            <ul>
                <li>Laravel Framework 8.83.27</li>
                <li>Node.js version v18.14.2</li>
                <li>MySQL Workbench 5.6.50-log</li>
            </ul>
        </div>

    </div>
</div>

@stop

@section('css')
@stop

@section('js')

@stop
