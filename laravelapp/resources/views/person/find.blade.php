@extends('layouts.helloapp')

@section('title','Person')
@section('menubar')
  @parent
  model使ってるＰＥＲＳＯＮ
@endsection

@section('content')
  <form class="" action="/person/find" method="post">
    {{csrf_field()}}
    <input type="text" name="input" value="">
    <input type="submit" name="" value="find">
  </form>
  @if(isset($item))
    <table>
      <tr>
        <th>Data</th>
      </tr>
      <tr>
        <td>{{$item->getData()}}</td>
      </tr>
    </table>
  @endif
@endsection

@section('content2')

@endsection

@section('content3')


@endsection

@section('content4')

@endsection

@section('content5')

@endsection





@section('footer')
  copyright2019 RYO.
@endsection
