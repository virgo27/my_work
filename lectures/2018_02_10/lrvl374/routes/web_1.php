<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function(){
    echo("Home");
});


Route::get('/signup', function(){
    $app_url = env('APP_URL');
//    echo("<a href='$app_url" . "login'>Login</a>");
    echo("<a href='" . url('login') . "'>Login</a><br>");
    echo("<a href='http://www.google.com'>Google</a>");
//    echo("<a href='login'>Login</a>");
});

Route::post('/process_signup', function(){
    echo("Signup");
});

Route::get('/login', function(){
//    echo("login");
        return "login";
});


Route::any('/login', function(){
//    echo("login");
        return "login";
});

Route::redirect('/php123', 'http://www.google.com', 301);


Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});


Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
    echo("POst $postId - Comment - $commentId");
});

Route::get('/products2/{page_no?}', function($page_no = 1){
    echo("Page $page_no");
});

Route::get('user2/{name}', function ($name) {
    //
})->where('name', '[A-Za-z]+');


Route::get('user3/{id}', function ($id) {
    //
})->where('id', '[0-9]+');


Route::get('user4/{id}/{name}', function ($id, $name) {
    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);



Route::get('/products', 'Products@index');
Route::get('/add_product', 'Products@create');













































