@extends('layouts.helloapp')
<style>
.pagination li {
  display: inline-block;
}
tr th a:link {
  color: white;
}

tr th a:visited {
  color: white;
}

tr th a {
  text-decoration: none;
}
</style>

@section('title','index')
@section('menubar')
  @parent
  Pagenation
@endsection

@section('content')
    <table>
      <tr>
        <th><a href="/hello?sort=name">name</a></th>
        <th><a href="/hello?sort=mail">mail</a></th>
        <th><a href="/hello?sort=age">age</a></th>
      </tr>
      @foreach($items as $a)
        <tr>
          <td>{{$a->name}}</td>
          <td>{{$a->mail}}</td>
          <td>{{$a->age}}</td>
        </tr>
      @endforeach
   </table>
   {{$items->appends(['sort'=>$sort])->links()}}
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
