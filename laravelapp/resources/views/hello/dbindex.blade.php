@extends('layouts.helloapp')

@section('title','dbindex')
@section('menubar')
  @parent
  データベースの基本を学ぶよ！！
@endsection

@section('content')
  <table>
    <tr>
      <th>name</th>
      <th>mail</th>
      <th>age</th>
    </tr>
    @foreach ($items as $items)
      <tr>
        <td>{{$items->name}}</td>
        <td>{{$items->mail}}</td>
        <td>{{$items->age}}</td>
      </tr>
    @endforeach
  </table>
@endsection



{{--@section('content2')
<p>追加はこっち↓↓</p>
<table>
  <form class="" action="/hello" method="post">
    {{csrf_field()}}
    <tr>
      <th>name: </th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>mail: </th>
      <td><input type="text" name="mail"></td>
    </tr>
    <tr>
      <th>age: </th>
      <td><input type="text" name="age"</td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="send"></td>
    </tr>
  </form>
</table>
@endsection--}}

@section('content3')


@endsection

@section('content4')

@endsection

@section('content5')

@endsection





@section('footer')
  copyright2019 RYO.
@endsection
