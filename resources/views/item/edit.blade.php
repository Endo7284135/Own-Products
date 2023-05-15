@extends('adminlte::page')

@section('title', '商品編集・削除')

@section('content_header')
    <h1>商品編集・削除</h1>
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
                <form action="/items/update" method="post">
                    @csrf
                    <input class="form-control" type="text" name="id" value="{{$item->id}}" hidden>
                    <input class="form-control" type="text" name="user_id" value="{{$item->user_id}}" hidden>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">商品名</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前" value="{{ $item->name }}">
                        </div>

                        <div class="form-group">
                            <label for="type_id">種類</label>
                        <div class="col-md-6">
                            <select name="type_id">
                                @foreach($types as $type_id => $name)
                                    @if( $item->type_id ==  $type_id )
                                    <option value="{{ $type_id }}" selected>{{ $name }}</option>
                                    @else
                                    <option value="{{ $type_id }}">{{ $name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                        <label for="size_id">サイズ</label>
                        @foreach ($sizes as $size_id => $name)
                            <label class="form-check-label">
                            <input type="radio" name="size_id" value="{{ $size_id }}" selected>
                            <span><i></i>{{ $name }}</span>
                            </label>
                        @endforeach
                        </div>

                        <div class="form-group">
                            <label for="price">値段</label>
                            <input type="price" class="form-control" id="price" name="price" value="{{ $item->price }}">
                        </div>

                        <div class="form-group">
                            <label for="detail">詳細</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="detail" cols="30" rows="10">{{$item->detail}}</textarea>
                        </div>

                    </div>

                    <div class="d-flex flex-row bd-highlight mb-3">
                        <div class="col-md-2 offset-md-2">
                            <button type="submit" class="btn btn-primary">{{ __('編集') }}</button>
                        </div>

                        <div class="col-md-2 offset-md-2">
                            <a href="/items/destroy/{{$item->id}}"><button type="button" class="btn btn-primary">{{ __('削除') }}</button></a>
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
