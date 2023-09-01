<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllNames extends Controller
{
    public function getAllNames($userNumber){
       
        echo "Hello ndakubona muri controller you Have Intered :: ",$userNumber;
        for($i=0; $i<$userNumber; $i++){
            echo "<br/>Welcome",$i;
        }
    } 
    //
}
