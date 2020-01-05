@extends('layouts.helloapp')

@section('title','restadd')
@section('menubar')
@endsection

@section('content')
  <table>
    <form class="" action="/rest" method="post">
      {{csrf_field()}}
      <tr>
        <th>message:</th>
        <td><input type="text" name="message" value="{{old('message')}}"</td>
      </tr>
      <tr>
        <th>URL:</th>
        <td><input type="text" name="url" value="{{old('url')}}"</td>
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
