<?php

namespace helloWorld\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudInsertController extends Controller
{
    public function insertForm(){
        return view('stud_create');
    }

    public function insert(Request $request){
        $name = $request -> input('stud_name');
        DB::insert('insert into student (name) values ?',[$name]);
        echo "Record inserted successfully. <br />";
        echo '<a href="/insert"> Click Here </a> to go back .';
    }
}
