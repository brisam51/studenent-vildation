<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    //
    public function list(){

        return view('list');
    }
    public function store(Request $request){

$student=$request->all();
student::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'gender'=>$request->gender,
    'age'=>$request->age,

]);
        return '$student';

    }


}
