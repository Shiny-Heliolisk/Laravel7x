<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\LienHeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/di-an-toi', function () {
    return view('diantoi');
});

Route::get('/danhmuc/quan-ao-tre-em', function () {
    return view('danhmuc.quanAoTreEm');
});

Route::get('/tintuc/{id?}', function ($id=0) {
    // echo 'id: '.$id;
    $data = [];
    $data['id_tin'] = $id;
    $data['message'] = 'hanoi';
    $data['code'] = 'php';
    return view('tintuc',$data);
});

Route::get('/lienhe', 'LienHeController@index');

Route::get('/radio', 'RadioController@demo');

Route::get('/abc/contact','abc\contact@contact');

Route::get('/comment/{comment_id?}','Backend\CommentController@commentDetail');

Route::get('/abc/contact/{category?}/{id?}','abc\contact@contact2');

Route::get("/product/create", "Codebase\ProductController@create");
Route::post("/product/store", "Codebase\ProductController@store");

Route::get("/create","Frontend\PostController@create");
Route::post("/create-post","Frontend\PostController@store");

Route::get("/contact","ContactController@detail");

Route::get("/first_MW",function(){
    echo 'đi ăn sáng';
})->middleware("openhour");

Route::get("/dong-cua",function(){
    echo 'dong cua';
});

Route::get("/check-age","FormController@show");
Route::post("/check-age/checked","FormController@checked")->middleware("checkAge");
Route::get("/khong-duoc-phep",function(){
    echo 'không đủ tuổi';
});

