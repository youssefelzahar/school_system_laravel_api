<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    use HasFactory;
    protected $fillable = ['name','course_id','teacher_id','schedule','room_number'];
    public function teacher(){
        return $this->belongsToMany(Teacher::class);
    }

}
