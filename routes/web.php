<?php

use Illuminate\Support\Facades\Route;

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

/*
get: lecture
post: ajoute
put: modify complete
patch: modifier parsiell 
delate: delete

*/ 

Route::get('/index', function(){
    return view('index', [
        'userName'=> 'Paul.Ann'
    ]);
});