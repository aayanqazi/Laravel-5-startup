<?php

namespace helloWorld\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie(Request $request){
        $minute = 1;
        $response = new Response('Hello World');
        $response -> withCookie(cookie('name','Arsalan Sabir',$minute));
        return $response;
    }

    public function getCookie(Request $request){
      $value = $request->cookie('name');
      echo $value;
   }
}
