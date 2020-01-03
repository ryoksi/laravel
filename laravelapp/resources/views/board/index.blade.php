extends('layouts.helloapp')

@section('title','Board')
@section('menubar')
  @parent
  掲示板！！！！！！！！
@endsection

@section('content')
    <table>
      <tr>
        <th>Data</th>
      </tr>
      @foreach($items as $a)
        <tr>
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
