<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    public function list(){

        return view('list');
    }
    public function store(Request $request){
$student=$request->all();
        return $student;

    }


}
