@extends('adminlte::page')

@section('title', '商品　詳細画面')

@section('content_header')
    <h1>商品　詳細画面</h1>
@stop

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>商品  詳細画面</title>
    </head>
    <body>

<!-- **************************************** -->
<script>
  const div = document.querySelector('div')
  div.animate([{opacity: '0'}, {opacity: '1'}], 200)
</script>
<!-- **************************************** -->

            @if ( $item->type_id==1)
                <?php $type_id="カジュアルシャツ" ; ?>
            @elseif ( $item->type_id==2)
                <?php $type_id="ドレスシャツ" ; ?>
            @elseif ( $item->type_id==3)
                <?php $type_id="ポロシャツ" ; ?>
            @elseif ( $item->type_id==4)
                <?php $type_id="Tシャツ" ; ?>
            @elseif ( $item->type_id==5)
                <?php $type_id="カットソー" ; ?>
            @elseif ( $item->type_id==6)
                <?php $type_id="タンクトップ" ; ?>
            @elseif ( $item->type_id==7)
                <?php $type_id="スウェット" ; ?>
            @elseif ( $item->type_id==8)
                <?php $type_id="パーカー" ; ?>
            @elseif ( $item->type_id==9)
                <?php $type_id="ニット・セーター" ; ?>
            @elseif ( $item->type_id==10)
                <?php $type_id="カーディガン" ; ?>
            @elseif ( $item->type_id==11)
                <?php $type_id="ベスト" ; ?>
            @elseif ( $item->type_id==12)
                <?php $type_id="カジュアルジャケット" ; ?>
            @elseif ( $item->type_id==13)
                <?php $type_id="テーラードジャケット" ; ?>
            @elseif ( $item->type_id==14)
                <?php $type_id="ブルゾン" ; ?>
            @elseif ( $item->type_id==15)
                <?php $type_id="カバーオール" ; ?>
            @elseif ( $item->type_id==16)
                <?php $type_id="デニムジャケット" ; ?>
            @elseif ( $item->type_id==17)
                <?php $type_id="ダウンジャケット・ベスト" ; ?>
            @elseif ( $item->type_id==18)
                <?php $type_id="ミリタリージャケット" ; ?>
            @elseif ( $item->type_id==19)
                <?php $type_id="ライダース" ; ?>
            @elseif ( $item->type_id==20)
                <?php $type_id="トレンチコート" ; ?>
            @elseif ( $item->type_id==21)
                <?php $type_id="ピーコート" ; ?>
            @elseif ( $item->type_id==22)
                <?php $type_id="ステンカラーコート" ; ?>
            @elseif ( $item->type_id==23)
                <?php $type_id="カジュアルパンツ" ; ?>
            @elseif ( $item->type_id==24)
                <?php $type_id="デニムパンツ" ; ?>
            @elseif ( $item->type_id==25)
                <?php $type_id="ショートパンツ" ; ?>
            @elseif ( $item->type_id==26)
                <?php $type_id="スラックス" ; ?>
            @elseif ( $item->type_id==27)
                <?php $type_id="スーツ" ; ?>
            @elseif ( $item->type_id==28)
                <?php $type_id="ネクタイ" ; ?>
            @endif
            @if ( $item->size_id==1)
                <?php $size_id="XS" ; ?>
            @elseif ( $item->size_id==2)
                <?php $size_id="S" ; ?>
            @elseif ( $item->size_id==3)
                <?php $size_id="M" ; ?>
            @elseif ( $item->size_id==4)
                <?php $size_id="L" ; ?>
            @elseif ( $item->size_id==5)
                <?php $size_id="LL" ; ?>
            @endif

            <div class="col-12 mt-3 mb-0 text-start">
                <label>ID：</label>
            </div>
            <div class="col-12 mt-0 mb-3 text-start">
                <input type="text" class="form-control" name="name" id="" readonly value= "{{$item->id}}" ></input>
            </div>

            <div class="col-12 mt-3 mb-0 text-start">
                <label>商品名：</label>
            </div>
            <div class="col-12 mt-0 mb-3 text-start">
                <input type="text" class="form-control" name="name" id="" readonly value= "{{$item->name}}" ></input>
            </div>

            <div class="col-12 mt-3 mb-0 text-start">
                <label>種別：</label>
            </div>
            <div class="col-12 mt-0 mb-3 text-start">
                <input type="text" style="width:100%" class="form-control" name="type_id" id="" readonly value= <?php echo $type_id ?>></input>
            </div>

            <div class="col-12 mt-3 mb-0 text-start">
                <label>サイズ：</label>
            </div>
            <div class="col-12 mt-0 mb-3 text-start">
                <input type="text" style="width:100%" class="form-control" name="size_id" id="" readonly value= <?php echo $size_id ?>></input>
            </div>

            <div class="col-12 mt-3 mb-0 text-start">
                <label>登録日時：</label>
            </div>
            <div class="col-12 mt-0 mb-3 text-start">
                <input type="text" style="width:100%" class="form-control" name="type" id="" readonly value= "{{$item->created_at->format('n月j日H:i')}}"></input>
            </div>

            <div class="col-12 mt-3 mb-0 text-start">
                <label>更新日時：</label>
            </div>
            <div class="col-12 mt-0 mb-3 text-start">
                <input type="text" style="width:100%" class="form-control" name="type" id="" readonly value= "{{$item->updated_at->format('n月j日H:i')}}"></input>
            </div>

            <div class="col-12 mt-3 mb-0 text-start">
                <label>詳細：</label>
            </div>
            <div class="col-12 mt-0 mb-3 text-start">
            <textarea type="text" style="width:100%;" class="form-control" name="detail" id="" readonly rows="3">{{$item->detail}}</textarea>
            </div>
    </body>
</html>
@endsection