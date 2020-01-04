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
 <h2>hasMany使った掲示板</h2>
 <p>投稿した人のメッセすべて表示される</p>
  <table>
    <tr>
      <th>Person</th>
      <th>Message</th>
    </tr>
    @foreach($items as $b)
      <tr>
        <td>{{$b->getData()}}</td>
        <td>
        @if($b->board != null)
          <table>
            @foreach($b->board as $obj)
              <tr>
                <td>{{$obj->getData()}}</td>
              </tr>
            @endforeach
          </table>
        @endif
      </td>
    </tr>
    @endforeach
  </table>
@endsection

{{--@section('content3')
  <table>
    <tr>
      <th>Peron</th>
      <th>Message</th>
    </tr>
    @foreach($items as $c)
      <tr>
        <td>{{$c->getData}}</td>
        <td>
          @if($c->boardone != null)
            {{$c->boardone->getData()}}
          @endif
        </td>
      </tr>
    @endforeach
  </table>
@endsection--}}

@section('content4')

@endsection

@section('content5')

@endsection





@section('footer')
  copyright2019 RYO.
@endsection
