@extends('layouts.helloapp')

@section('title','session')
@section('menubar')
  @parent
  データベースに挿入♂ページ
@endsection

@section('content')
<div class="row">
  <p>{{$session_data}}</p>
      <form class="" action="/hello/session" method="post">
        {{csrf_field()}}
        <input type="text" name="input" value="">
        <input type="submit" class="btn btn-block btn-primary" name="" value="send">
      </form>
    </div>
  </div>
@endsection
