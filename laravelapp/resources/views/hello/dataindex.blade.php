@extends('layouts.helloapp')
@section('title','dataindex')
@section('menuber')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>include文使用！！subview表示</p>
  @include('components.message',['msg_title'=>'OK','msg_content'=>'subview'])
@endsection

@section('content2')
  <p>エッチなeachディレクティブ使用</p>
  <ul>
    @each('components.item',$data,'item')
  </ul>
@endsection

@section('content3')
  <p>コンポーネント（部品）使用</p>
  @component('components.message')//componentsの中のmessage(拡張子省略)を呼び出し
    @slot('msg_title')
      Caution!!!!!!!!!!
    @endslot

    @slot('msg_content')
      this is message
    @endslot
  @endcomponent

@endsection

@section('content4')
  <p>プロバイダ使用</p>
  <p>Controller value<br> 'message'={{$view_message}}</p>
  <p>ViewComposer value<br>'view_message'={{$view_message}}</p>
@endsection

@section('content5')
  <p>foreach文使用　eachディレクティブは中でこれやってる</p>
  <table>
    @foreach($data as $item)
      <tr>
        <th>{{$item['name']}}</th>
        <td>{{$item['mail']}}</td>
      </tr>
    @endforeach
  </table>
@endsection




@section('footer')
copyright2019 RYO.
@endsection
