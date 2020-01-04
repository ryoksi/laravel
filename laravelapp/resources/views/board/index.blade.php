@extends('layouts.helloapp')

@section('title','Board')
@section('menubar')
  @parent
  掲示板！！！！！！！！
@endsection

@section('content')
    <table>
      <tr>
        <th>Title</th>
        <th>Message</th>
        <th>Name</th>
      </tr>
      @foreach($items as $a)
        <tr>
          <td>{{$a->title}}</td>
          <td>{{$a->message}}</td>
          <td>{{$a->person->name}}</td>
        </tr>
      @endforeach
   </table>
@endsection



@section('content2')
<table>
  <form class="" action="/board/add" method="post">
    {{csrf_field()}}
    <tr>
      <th>Person_id:</th>
      <td><input type="number" name="person_id"></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><input type="text" name="title"></td>
    </tr>
    <tr>
      <th>Message:</th>
      <td><input type="text" name="message"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="投稿"></td>
    </tr>
  </form>
</table>
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
