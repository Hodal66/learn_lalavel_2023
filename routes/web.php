<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
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
Route::get('users',[Users::class, 'getNewMessage']);