<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
  public function other(Request $request,Response $response) {

    return <<<EOF
    <html>
    <head>
    <title>Hello/index</title>
    <style>
    body {
      font-size:16pt;
      color:#999;
    }
    h1 {
      font-size: 100pt;
      color:#eee;
      text-align:right;
      margind: -40px 0 -50px 0px;
    }
    </style>
    </head>
    <body>
    <h1>Hello</h1>
    <h2>Request</h2>
    <pre>{$request}</pre>
    <h2>Response</h2>
    <pre>{$response}</pre>
    </body>
    </html>
    EOF;

    $response->setContent($html);
    return $response;
  }

  public function queryindex(Request $request) {
    $data=['msg'=>'これはコントローラから渡されたメッセージです','id'=>$request->id];
    return view('hello.index',$data);
  }

  public function dataindex() {
    $data=[
      ['name'=>'笠井　瞭', 'mail'=>'s17049kr@st.nuis.jp'],
      ['name'=>'佐藤　将哉', 'mail'=>'s17100kr@st.nuis.jp'],
      ['name'=>'姥山　隆一', 'mail'=>'s17035kr@st.nuis.jp'],
    ];
    return view('hello.dataindex',['data'=>$data]);
    //,['data'=>$data],['message'=>'Hello']);

  }


  public function middleindex(Request $request) {
    if ($request->hasCookie('msg')) {
      $msg='Cookie:'.$request->cookie('msg');
    }else {
      $msg='クッキーはない';
    }
    return view('hello.middleindex',['msg'=>$msg]);
    /*$validator=Validator::make($request->query(),[
      'id'=>'required',
      'pass'=>'required',
    ]);
    if ($validator->fails()) {
      $msg='クエリーに問題があります';
    }else {
      $msg='ID/Passを受け付けました。フォームを入力してください';
    }
    return view('hello.middleindex',['msg'=>$msg, ]);*/
  }


  public function index(Request $request) {
    $items=DB::table('people')->get();
    return view('hello.dbindex',['items'=>$items]);
    /*if (isset($request->id)) {
      $param=['id'=>$request->id];
      $items=Db::select('select * from people where id=:id',$param);
    }else {
      $items=DB::select('select*from people');
    }
    return view('hello.dbindex',['item'=>$items]);
  }

  public function add(Request $request) {
    return view('hello.add');*/
  }

  public function add(Request $request) {
    return view('hello.add');
  }

  public function create(Request $request) {
    $param=[
      'name'=>$request->name,
      'mail'=>$request->mail,
      'age'=>$request->age,
    ];
    DB::table('people')->insert($param);
    return redirect('/hello');
  }

  public function edit(Request $request) {
    $item=DB::table('people')->where('id',$request->id)->first();
    return view('hello.edit',['form'=>$item]);
    /*$param=['id'=>$request->id];
    $item=DB::select('select * from people where id=:id',$param);
    return view('hello.edit',['form'=>$item[0]]);*/
  }

  public function update(Request $request) {
    $param=[
      'name'=>$request->name,
      'mail'=>$request->mail,
      'age'=>$request->age,
    ];
    DB::table('people')->where('id',$request->id)->update($param);
    /*DB::update('update people set name =:name,mail= :mail,age= :age
    where id= :id',$param);*/
    return redirect('/hello');
  }

  public function del(Request $request) {
    $item=DB::table('people')->where('id',$request->id)->first();
    /*$param=['id'=>$request->id];
    $item=DB::select('select * from people where id=:id',$param);*/
    return view('hello.delete',['form'=>$item]);
  }

  public function remove(Request $request) {
    DB::table('people')->where('id',$request->id)->delete();
    /*$param=['id'=>$request->id];
    DB::delete('delete from people where id=:id',$param);*/
    return redirect('/hello');
  }

  public function show(Request $request) {
    $id=$request->id;
    $name=$request->name;
    $min=$request->min;
    $max=$request->max;

    $page=$request->page;
    $itemol=DB::table('people')->offset($page*3)->limit(3)->get();
    //$itemob=DB::table('people')->orderBy('age','asc')->get();

    //$item=DB::table('people')->where('id',$id)->first();ＩＤからファーストで一行だけ取得
    //$items=DB::table('people')->where('id','<=',$id)->get();ウェアつなげる
    /*$items2=DB::table('people')
    ->where('name','like','%'.$name.'%')ライクの文字連結
    ->orWhere('mail','like','%'.$name.'%')
    ->get();*/
    /*$items3=DB::table('people')
    ->whereRaw('age >= ? and age <= ?',[$min,$max])->get();ウェアロウの書き方*/

    return view('hello.show',['itemol'=>$itemol]);
  }

public function post(/*Hello*/Request $request) {
  $items=DB::select('select * from people');
  return view('hello.index',['items'=>'$items']);
  /*$validate_rule=[
    'msg'=>'required',
  ];
  $this->validate($request,$validate_rule);
  $msg=$request->msg;
  $response=new Response(view('hello.middleindex',['msg'=>'「'.$msg.'」クッキーを保存しました']));
  $response->cookie('msg',$msg,100);
  return $response;
  return view('hello.middleindex',['msg'=>'正しく入力されました']);
  /*  $rules=[
  'name'=>'required',
  'mail'=>'email',
  'age'=>'numeric',

];
$messages=[
'name.required'=>'名前は必ず入力してください',
'mail.email'=>'メールアドレスが必要です',
'age.numeric'=>'年齢を整数で記入してください',
'age.min'=>'年齢は0歳以上で記入してください',
'age.max'=>'年齢は200歳以下で記入してください',
];
$validator=Validator::make($request->all(),$rules,$messages);
$validator->sometimes('age','min:0',function($input){
return !is_int($input->age);
});
$validator->sometimes('age','max:200',function($input){
return !is_int($input->age);
});
if ($validator->fails()) {
return redirect('/hello')->withErrors($validator)->withInput();
}
return view('hello.middleindex',['msg'=>'正しく入力されました！！']);*/
  }

  public function rest(Request $request) {
    return view('hello.rest');
  }
}
