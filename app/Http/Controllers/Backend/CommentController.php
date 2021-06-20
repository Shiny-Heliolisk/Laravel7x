<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function commentDetail($comment_id=0){
        echo 'id là: '.$comment_id;
    }
}
