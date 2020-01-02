@extends('layouts.helloapp')

@section('title','ADD')
@section('menubar')
  @parent
  データベースに挿入♂ページ
@endsection

@section('content')
  <table>
    <form class="" action="/hello/add" method="post">
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
