<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function index(Request $request){
      $items=Person::all();
      return view('person.index',['items'=>$items]);
    }

    public function find(Request $request) {
      return view('person.find',['input'=>'']);
    }

    public function search(Request $request) {
      $min=$request->input*1;
      $max=$min+10;

      $item=Person::NameEqual($request->input)->first();
      //$item=Person::where('name','like','%'.$request->input.'%')->first();
      $item2=Person::AgeGreater($min)->AgeLess($max)->first();
      $param=['input'=>$request->input,'item'=>$item2];

      return view('person.find',$param);
      /*$item=Person::find($request->input);
      $param=['input'=>$request->input,'item'=>$item];
      return view('person.find',$param);*/
    }

    public function add (Request $request) {
      return view('person.add');
    }

    public function create(Request $request) {
      $this->validate($request, Person::$rules);
      $person = new Person;
      $form=$request->all();
      unset($form['_token']);
      $person->timestamps=false;//taimstampを無効か
      $person->fill($form)->save();
      return redirect('/person');
    }
}
