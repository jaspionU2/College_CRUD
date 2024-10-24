<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nome', 'telefone', 'email', 'collegeId'];

    public function College()
    {
         return $this->belongsTo(College::class);
    }

    public function Courses()
    {
        return $this->belongsToMany(Courses::class, 'teacher_course','teacherID', 'CoursesID');
    }
}
