@extends('layouts.helloapp')

@section('title','Person')
@section('menubar')
  @parent
  model使ってるＰＥＲＳＯＮ
@endsection

@section('content')
  @if (count($errors)>0)
    <div class="">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <table>
    <form class="" action="/person/add" method="post">
      {{csrf_field()}}
      <tr>
        <th>name:</th>
        <td><input type="text" name="name" value="{{old('name')}}"></td>
      </tr>
      <tr>
        <th>mail:</th>
        <td><input type="text" name="mail" value="{{old('mail')}}"></td>
      </tr>
      <tr>
        <th>age:</th>
        <td><input type="number" name="age" value="{{old('age')}}"></td>
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
