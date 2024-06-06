<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function Students(){
        return $this->belongsToMany(Student::class,'student_course');
    }
    public function Teachers(){
        return $this->hasMany(Teacher::class,'courses_teacher');
    }
}
