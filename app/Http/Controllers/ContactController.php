<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function detail()
    {
        $data=[];
        $data['contact']='liên hệ với chúng tôi';
        $data['email']='admin@gmail.com';
        return view("contact.detail",$data);
    }
}
