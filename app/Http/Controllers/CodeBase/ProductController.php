<?php

namespace App\Http\Controllers\CodeBase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // method này trả về view hiển thị form
    public function create()
    {
        return view('product.create');
    }
    // method này lưu trữ dữ liệu người dùng post đi từ form và lưu vào DB
    public function store()
    {
        echo "<br>" . __METHOD__;

       echo "<pre>";

       print_r($_POST);

       echo "</pre>";
    }
}
