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
    return view('stud_create');
});

Route::post('/create','StudInsertController@insert');


Route::get('/blade',function(){
    return view('page');
});

// Redirecting Route
Route::get('/test', ['as'=>'testing',function(){
   return view('test');
}]);

Route::get('redirect',function(){
    return redirect()->route('testing');
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

//Controller Routes

Route::get('/usercontroller/path',[
    'middleware' => 'First',
    'uses' => 'UserController@showPath'
]);

//Restfull controller

Route::resource('my','MyController');

//Laravel Requets Route

Route::get('/foo/bar','UriController@index');
//Registration Form Route

Route::get('/register',function(){
    return view('register');
});

Route::post('/user/register',array(
    'uses' => 'UserRegistration@postRegister'
));

// Cookie Route
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');


