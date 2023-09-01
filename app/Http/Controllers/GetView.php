<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetView extends Controller
{
public function LoadView(){
    return view('users');
}
}
