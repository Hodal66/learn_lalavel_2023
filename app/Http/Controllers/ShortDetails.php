<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortDetails extends Controller
{
    public function getShortDetails($fullName,$email,$ages){
        echo "Your Full Name : ",$fullName,"<br/>";
        echo "Your Email is : ",$email,"<br/>";
        echo "Your Ages is : ",$ages,"<br/>";
    }
}
