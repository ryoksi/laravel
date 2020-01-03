@extends('layouts.helloapp')

@section('title','Person')
@section('menubar')
  @parent
  model,Personを使用した更新処理
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
    <form class="" action="/person/edit" method="post">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$form->id}}">
      <tr>
        <th>name:</th>
        <td><input type="text" name="name" value="{{$form->name}}"></td>
      </tr>
      <tr>
        <th>mail:</th>
        <td><input type="text" name="mail" value="{{$form->mail}}"></td>
      </tr>
      <tr>
        <th>age:</th>
        <td><input type="number" name="age" value="{{$form->age}}"></td>
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
