<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
   function index(){
    return view('index');
   }

function shuffle(Request $request)

{

$arr=$request->all();
unset($arr["_token"]);

 shuffle($arr);

$result= array_chunk($arr,2);

 return view('create',['date'=>$result]);

}





}
