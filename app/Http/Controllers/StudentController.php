<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        return Student::with('Courses')->get();
    }
    public function show($id){
        return Student::with('courses')->findOrFail( $id );
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

          $student=Student::create($request->all());
          return response()->json($student,201);
    }
    
    public function enroll(Request $request, $id)
    {
        $request->validate([
            'course_ids' => 'required|array',
            'course_ids.*' => 'exists:courses,id'
        ]);

        $student = Student::findOrFail($id);
        $student->courses()->sync($request->course_ids);

        return response()->json($student->courses);
    }
    public function getcourses($id){
        $student=Student::with('courses')->findOrFail($id);
        return response()->json($student->courses);

    }
}
