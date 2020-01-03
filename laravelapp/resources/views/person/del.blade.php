@extends('layouts.helloapp')

@section('title','Person')
@section('menubar')
  @parent
  model,Personを使用した削除処理
@endsection

@section('content')
  <table>
    <form class="" action="/person/del" method="post">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$form->id}}">
      <tr>
        <th>name: </th>
        <td>{{$form->name}}</td>
      </tr>
      <tr>
        <th>mail: </th>
        <td>{{$form->mail}}</td>
      </tr>
      <tr>
        <th>age: </th>
        <td>{{$form->age}}</td>
      </tr>
      <tr>
        <th></th>
        <td><input type="submit" value="send"></td>
      </tr>
    </form>
  </table>
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
