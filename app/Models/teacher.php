<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    protected $fillable = ['name','subject','phone_number','email_address'];
    public function Courses(){
        return $this->hasOne(Course::class);
    }
    public function classes(){
        return $this->belongsToMany(Classes::class,'classes_teacher');
    }

}
