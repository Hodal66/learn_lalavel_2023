<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\AboutMe;
use App\Http\Controllers\AllNames;
use App\Http\Controllers\ShortDetails;
use App\Http\Controllers\GetView;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('first_program');
});
Route::get('/home/{name}', function ($name) {
  
    return view('welcome',["FirstName"=>$name]);
});
// Route::get('/about_us', function (){
//     return view('about_us');
// });
Route::view('about_us','about_us');//this is the short way of routing in lalavel
Route::view('nice','nice');
// Route::get('users',[Users::class, 'getNewMessage']);
Route::get('all_names/{userNumber}',[AllNames::class,'getAllNames']);

Route::get('short_details',[ShortDetails::class,'getShortDetails("Muheto Hodal","mhthodol@gmail.com",40)']);
Route::get('users',[GetView::class,'LoadView']);