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
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="type_id">種類</label>
                        <div class="col-md-6">
                                <select name="type_id">
                                    <option value="" disable></option>
                                    @foreach($types as $type_id => $name)
                                    <option value="{{ $type_id }}" @if(old('type_id')==$type_id)selected @endif>{{ $name }}</option>
                                    @endforeach
                                </select>
                        </div>
                        
                        <div class="form-group">
                        <label for="size_id">サイズ</label>
                        @foreach ($sizes as $size_id => $name)
                            <label class="form-check-label">
                            <input type="radio" value="{{ $size_id }}">
                            <span><i></i>{{ $name }}</span>
                            </label>
                        @endforeach
                        </div>

                        <div class="form-group">
                            <label for="detail">詳細</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="detail" cols="30" rows="10" placeholder="詳細説明">{{ old('detail') }}</textarea>
                        </div>

                    </div>

                    <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('登録') }}
                                </button>
                            </div>
                    </div>
                </form>
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
