<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetView extends Controller
{
public function LoadView($ages){
    if($ages<20){
        $ages=20;
        
    }
    return view('users',['name'=>'Muheto Hodal','ages'=>$ages]);
 }
}
