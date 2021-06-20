<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('baitap');
    }
    public function store()
    {
        echo "<br>" . __METHOD__;

       echo "<pre>";

       print_r($_POST);

       echo "</pre>";
    }
}
