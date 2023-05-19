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
                    <h3 class="card-title">商品 / 詳細検索</h3>
                </div>
                <table width="100%">
                    <th>
                        <form action="{{ route('searches.index') }}" method="GET">
                            <input type="text" name="keyword" value="{{ $keyword }}">
                            <input type="submit" class="btn btn-secondary" value="検索">
                        </form>
                    </th>
                </table>
            </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                            <th>@sortablelink('id', 'ID')</th>
                            <th>商品名</th>
                            <th>種別</th>
                            <th>@sortablelink('size_id', 'サイズ')</th>
                            <th>@sortablelink('price', '値段')</th>                        
                            <th>更新日時</th>
                            <th>詳細</th>
                        </tr>
                    </thead>
                    
                    <!--ループ はじめ-->
                    @foreach ($items as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>   
                            @if ( $value->type_id==1)
                                <td>カジュアルシャツ</td>
                            @elseif ( $value->type_id==2)
                                <td>ドレスシャツ</td>
                            @elseif ( $value->type_id==3)
                                <td>ポロシャツ</td>
                            @elseif ( $value->type_id==4)
                                <td>ドレスシャツ</td>
                            @elseif ( $value->type_id==5)
                                <td>カットソー</td>
                            @elseif ( $value->type_id==6)
                                <td>タンクトップ</td>
                            @elseif ( $value->type_id==7)
                                <td>スウェット</td>
                            @elseif ( $value->type_id==8)
                                <td>パーカー</td>
                            @elseif ( $value->type_id==9)
                                <td>ニット・セーター</td>
                            @elseif ( $value->type_id==10)
                                <td>カーディガン</td>
                            @elseif ( $value->type_id==11)
                                <td>ベスト</td>
                            @elseif ( $value->type_id==12)
                                <td>カジュアルジャケット</td>
                            @elseif ( $value->type_id==13)
                                <td>テーラードジャケット</td>
                            @elseif ( $value->type_id==14)
                                <td>ブルゾン</td>
                            @elseif ( $value->type_id==15)
                                <td>カバーオール</td>
                            @elseif ( $value->type_id==16)
                                <td>デニムジャケット</td>
                            @elseif ( $value->type_id==17)
                                <td>ダウンジャケット・ベスト</td>
                            @elseif ( $value->type_id==18)
                                <td>ミリタリージャケット</td>
                            @elseif ( $value->type_id==19)
                                <td>ライダース</td>
                            @elseif ( $value->type_id==20)
                                <td>トレンチコート</td>
                            @elseif ( $value->type_id==21)
                                <td>ピーコート</td>
                            @elseif ( $value->type_id==22)
                                <td>ステンカラーコート</td>
                            @elseif ( $value->type_id==23)
                                <td>カジュアルパンツ</td>
                            @elseif ( $value->type_id==24)
                                <td>デニムパンツ</td>
                            @elseif ( $value->type_id==25)
                                <td>ショートパンツ</td>
                            @elseif ( $value->type_id==26)
                                <td>スラックス</td>
                            @elseif ( $value->type_id==27)
                                <td>スーツ</td>
                            @elseif ( $value->type_id==28)
                                <td>ネクタイ</td>
                            @endif
                            @if ( $value->size_id==1)
                                <td>XS</td>
                            @elseif ( $value->size_id==2)
                                <td>S</td>
                            @elseif ( $value->size_id==3)
                                <td>M</td>
                            @elseif ( $value->size_id==4)
                                <td>L</td>
                            @elseif ( $value->size_id==5)
                                <td>LL</td>
                            @endif
                            <td>{{ $value->price }}円</td>
                            <td>{{ $value->updated_at->format('m月d日H:i') }}</td>
                            <td  width="15%"><a href="{{ url('items/search/detail/'.$value->id) }}"> >>詳細 </a></td>
                        </tr>
                    @endforeach 
                    <!--ループ おわり-->
                </table>

                {{ $items->links('vendor.pagination.default') }}

            </div>
        </div>
    </body>
</html>
@endsection

@section('css')
@stop

@section('js')
    <script>
    const div = document.querySelector('div')
    div.animate([{opacity: '0'}, {opacity: '1'}], 200)
    </script>
@stop
