<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show()
    {
        return view("form_checkAge");
    }

    public function checked(Request $request)
    {
        echo 'tuổi của bạn là: '.$request->input('age').'. ';
        echo 'đã đủ tuổi';
    }
}
