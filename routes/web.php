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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
    return view('hello');
});

//Required Parameters
Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;
});

//Optional Parameters

Route::get('opt/{name?}',function($name="Arsalan Sabir"){
    echo 'Name:' .$name;
});

//Middleware Route

Route::get('role',[
    'middleware' => 'role:editor',
   'uses' => 'TestController@index',
]);

//Terminate Middleware Route

Route::get('terminate',[
    'middleware'=> 'terminate',
    'uses'=>'TerminateController@index',
]);