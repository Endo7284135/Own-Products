@extends('adminlte::page')

@section('title', '商品一覧')

@section('content_header')
    <h1>商品一覧</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">商品一覧</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <div class="input-group-append">
                                <a href="{{ url('items/add') }}" class="btn btn-primary">商品登録</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>名前</th>
                                <th>種別</th>
                                <th>サイズ</th>
                                <th>値段</th>
                                <th>更新日時</th>
                                <th>編集</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $types[$value->type_id] }}</td>
                                    <td>{{ $sizes[$value->size_id] }}</td>
                                    <td>{{ $value->price }}</td>
                                    <td>{{ $value->updated_at->format('m月d日H:i') }}</td>
                                    <td  width="15%"><a href="{{ url('items/item_edit/'.$value->id) }}"> >>編集 </a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script>
    const div = document.querySelector('div')
    div.animate([{opacity: '0'}, {opacity: '1'}], 200)
    </script>
@stop
