<?php

namespace App\Http\Controllers\abc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contact extends Controller
{
    public function contact(){
        echo __METHOD__;
    }

    public function contact2($category='none',$id=0){
        echo __METHOD__;
        echo "<br>id la: ". $id;
        echo "<br>category: ".$category;
    }
}
