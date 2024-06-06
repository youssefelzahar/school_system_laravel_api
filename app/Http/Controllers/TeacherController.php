<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
class TeacherController extends Controller
{
    //
    public function index(){
        return Teacher::with('classes')->get();
      // return teacher::all();
    }
    public function show($id){
        return Teacher::with('classes')->findOrFail( $id );
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
           
        ]);
        $teacher = teacher::create($request->all());
        return response()->json([
            'message' => 'Teacher created successfully',
            'teacher' => $teacher
        ], 201);
    }
    public function enroll(Request $request, $id)
    {
        $validatedData = $request->validate([
            'class_id' => 'required|exists:classes,id',
            'teacher_id' => 'required|exists:teachers,id'
        ]);

        // Insert the data into the classes_teacher pivot table
        teacher::table('classes_teacher')->insert([
            'class_id' => $validatedData['class_id'],
            'teacher_id' => $validatedData['teacher_id']
        ]);

        // Return a response
        return response()->json([
            'message' => 'Teacher assigned to class successfully'
        ], 201);
    }

}
