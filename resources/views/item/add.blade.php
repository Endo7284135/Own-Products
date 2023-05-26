@extends('adminlte::page')

@section('title', '商品登録')

@section('content_header')
    <h1>商品登録</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                       @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                </div>
            @endif

            <div class="card card-primary">
                <form method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">商品名</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前(15文字以内)" value="{{ old('name') }}">
                        </div>

                        <div class="select1">
                            <label for="type_id">種別</label>
                                <select name="type_id">
                                    <option value="" disable></option>
                                    @foreach($types as $type_id => $name)
                                    <option value="{{ $type_id }}" @if(old('type_id')==$type_id)selected @endif>{{ $name }}</option>
                                    @endforeach
                                </select>
                        </div>
                        
                        <div class="select2">
                            <label for="size_id">サイズ</label>
                                @foreach ($sizes as $size_id => $name)
                                    <label class="form-check-label">
                                    <input type="radio" name="size_id" value="{{ $size_id }}" @if(old('size_id')==$size_id) checked @endif>
                                    <span><i></i>{{ $name }}</span>
                                    </label>
                                @endforeach
                        </div>

                        <div class="select3">
                            <label for="color_id">カラー</label>
                                <select name="color_id">
                                    <option value="" disable></option>
                                    @foreach($colors as $color_id => $name)
                                    <option value="{{ $color_id }}" @if(old('color_id')==$color_id)selected @endif>{{ $name }}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="price">値段</label>
                            <input type="price" class="form-control" id="price" name="price" value="{{ old('price') }}" placeholder="10000円~500000円, ...">
                        </div>

                        <div class="form-group">
                            <label for="detail">詳細</label>
                            <textarea class="form-control" name="detail" cols="30" rows="5" placeholder="詳細説明(100文字以内)">{{ old('detail') }}</textarea>
                        </div>

                    <div class="button">
                        <button type="submit" class="btn btn-primary btn-lg">登録</button></button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
<style>
    .form-check-label{
        margin-left: 8px;
    }
    .form-group{
        margin-bottom: 20px;
    }
    .select1{
        display: inline;
    }
    .select2{
        display: inline;
        margin-left: 8px;
    }
    .select3{
        display: inline;
        margin-left: 8px;
    }
    .button{
        margin-left: 1px;
    }
</style>
@stop

@section('js')
<script>
    const div = document.querySelector('div')
    div.animate([{opacity: '0'}, {opacity: '1'}], 200)
</script>
@stop
