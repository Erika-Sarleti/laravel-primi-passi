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
    $params = [
        'title' => 'Hello World: Supreme Project!'
    ];
    return view('hello-world', $params);
});
Route::get('/why-supreme', function (){
    return view('supreme');
})->name('supreme');

Route::get('/project', function(){
    return view('project');
})->name('project');

Route::get('/font', function(){
    return view('font');
})->name('font');
