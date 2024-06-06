<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classes;
class ClassesController extends Controller
{
    //
    public function index(){
         return classes::all(); 
    }
    public function show($id){
        return classes::get($id);
    }

    public function store(Request $request){
         $request->validate(
            ["name"=>'required|string|max:255',]
         );
         $classes = classes::create($request->all());
         return response()->json([
            'message' => 'Teacher created successfully',
            'teacher' => $classes
        ], 201);    }

}
