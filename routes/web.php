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

use App\Postcard;
use App\PostcardSendingService;

Route::get('/', function () {
    return view('welcome');
});

//Normal Procedure
Route::get('/postcards', function(){
    $postcardService = new PostcardSendingService('usa', 10, 5);
    $postcardService->hello('Hello from coder\'s cafe', 'dev.kartic@gmail.com');
});


// User Facades

Route::get('/facades', function (){
    Postcard::hello('This is from Coders cafe123', 'khokon@gmail.com');
});
