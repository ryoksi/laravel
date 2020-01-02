@extends('layouts.helloapp')

@section('title','Person')
@section('menubar')
  @parent
  model使ってるＰＥＲＳＯＮ
@endsection

@section('content')
    <table>
      <tr>
        <th>Name</th>
        <th>Mail</th>
        <th>Age</th>
        <th>getData</th>
      </tr>
      @foreach($items as $a)
        <tr>
          <td>{{$a->name}}</td>
          <td>{{$a->mail}}</td>
          <td>{{$a->age}}</td>
          <td>{{$a->getData()}}</td>
        </tr>
      @endforeach
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
