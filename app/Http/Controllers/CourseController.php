<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    //
    public function index(){
        return Course::all();
    }
    public function show($id){
        return Course::with('students')->findOrFail($id);
    }
    public function store(Request $request){
         $courses = Course::create($request->all());
         return response()->json($courses,201);
    }
}
