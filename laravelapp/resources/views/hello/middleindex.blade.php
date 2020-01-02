@extends('layouts.helloapp')

@section('title','middleindex')
@section('member')
  @parent
  インデックスページ
@endsection

{{--@section('content')
<p>middleware使用 リクエストを使って前処理</p>
<table>
  @foreach($data as $item)
  <tr>
    <th>{{$item['name']}}</th>
    <td>{{$item['mail']}}</td>
  </tr>
  @endforeach
</table>
@endsection data受け取るタイプのやつ--}}



@section('content2')
  <p>レスポンスを使って後処理しています</p>
  <p>これは、<middleware>google.com</middleware>へのリンクです</p>
  <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです</p>
  <p>これは、<middleware>www.nuis.ac.jp</middleware>へのリンクです</p>
@endsection

@section('content3')
  <p>{{$msg}}</p>
  @if (count($errors)>0)
    <p>入力に問題があります。再入力してください</p>
  @endif

    <table>
      <form class="" action="/hello" method="post">
        {{csrf_field()}}
        @if ($errors->has('name'))
          <tr>
            <th>ERROR</th>
            <td>{{$errors->first('name')}}</td>
          </tr>
        @endif
        <tr>
          <th>name:</th>
          <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>

        @if ($errors->has('mail'))
          <tr>
            <th>ERROR</th>
            <td>{{$errors->first('mail')}}</td>
          </tr>
        @endif

        <tr>
          <th>mail:</th>
          <td><input type="text" name="mail" value="{{old('mail')}}"></td>
        </tr>

        @if($errors->has('age'))
          <tr>
            <th>ERROR</th>
            <td>{{$errors->first('age')}}</td>
          </tr>
        @endif
        <tr>
          <th>age:</th>
          <td><input type="text" name="age" value="{{old('age')}}"></td>
        </tr>

       @if($errors->has('msg'))
          <tr>
            <th>ERROR:</th>
            <td>{{$errors->first('msg')}}</td>
          </tr>
        @endif
        <tr>
          <th>Message:</th>
          <td><input type="text" name="msg" value="{{old('msg')}}"></td>
        </tr>

        <tr>
          <th></th>
          <td><input type="submit" neme="middle-btn" value="send"></td>
        </tr>
      </form>
    </table>
@endsection

@section('content4')

@endsection

@section('content5')

@endsection





@section('footer')
  copyright2019 RYO.
@endsection
