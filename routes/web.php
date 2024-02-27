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
Route::get('/', function(){
    return view("welcome");
});

//creating the route

Route::get('/teet', function () {
    return view('home');
});
//creating the route for displaying the data
// this data canbe assecible in blade file also
Route::get('/teet/{name}/{data?}', function ($name,$data=null) {
    // dd($data);
    $sum=compact('name','data');
    // print_r($sum);
    return view('demo')->with($sum);
   
});

//passing the data 

Route::get('/name/{data}', function($data){
    return view('demo');
});
