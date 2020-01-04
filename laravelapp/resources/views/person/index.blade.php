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
<h2>掲示板に投稿した人とメッセージ</h2>
 <table>
   <tr>
     <th>Person</th>
     <th>Message</th>
   </tr>
   @foreach($hasItems as $hasitem)
     <tr>
       <td>{{$hasitem->getData()}}</td>
       <td>
         <table>
           @foreach($hasitem->board as $obj)
             <tr>
               <td>{{$obj->getData()}}</td>
             </tr>
           @endforeach
         </table>
     </td>
   </tr>
   @endforeach
 </table>
 <h3>まだ投稿していない人</h3>
  <table>
    <tr>
      <th>Person</th>
    </tr>
    @foreach($noItems as $noitem)
      <tr>
        <td>{{$noitem->getData()}}</td>
      </tr>
    @endforeach
  </table>
@endsection

@section('content5')

@endsection





@section('footer')
  copyright2019 RYO.
@endsection
