<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassesTeacherController extends Controller
{
    public function index(){
        return DB::table("classes_teacher")->get();
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'class_id' => 'required|exists:classes,id',
            'teacher_id' => 'required|exists:teachers,id'
        ]);

        // Insert the data into the classes_teacher pivot table
        DB::table('classes_teacher')->insert([
            'class_id' => $validatedData['class_id'],
            'teacher_id' => $validatedData['teacher_id']
        ]);

        // Return a response
        return response()->json([
            'message' => 'Teacher assigned to class successfully'
        ], 201);
    }
}
