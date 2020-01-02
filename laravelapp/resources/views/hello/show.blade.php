@extends('layouts.helloapp')

@section('title','show de show')
@section('menubar')
  @parent
  詳細ページ
@endsection

@section('content')
  @if($itemol != null)
    @foreach($itemol as $a)
      <table>
        <tr>
          <th>id: </th>
          <td>{{$a->id}}</td>
          <th>name: </th>
          <td>{{$a->name}}</td>
          <th>age: </th>
          <td>{{$a->age}}</td>
        </tr>
      </table>
    @endforeach
  @endif
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
