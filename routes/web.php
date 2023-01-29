<?php

use Illuminate\Support\Facades\Route;

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

route::get('/contact', function (){
    return "خوش امدید";
});

route::get('/about', function (){
    return "درباره ما";
});

route::get('post/{id?}/{name?}', function ($id= null ,$name= null){
return"name in post = ".$name ." and id = ". $id;
});
route::get('/admin/post/example', function (){
    $url= route('admin');
    return"این صفحه برای ادمین میباشد و url برابر با". $url;
})->name('admin');

route::get('/admin/login' , function (){
    return  'صفحه ورود مدیریت';
});

//route::redirect('admin/login','/roxo/laravel/laravel/public/admin/post/example',301);


route::prefix('admin')->group(function (){
    route::get('post/example',function (){
        return'گروه بندی ادمین';
    });    route::get('login',function (){
        return'لاگین ادمین';
    });
});
