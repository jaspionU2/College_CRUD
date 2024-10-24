<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
   use HasFactory;

   public $timestamps = false;

   protected $fillable = ['nome', 'descricao', 'carga_horaria'];

   public function Teacher()
   {
      return $this->belongsToMany(Teacher::class, 'teacher_course', 'teacherID', 'CoursesID');
   }
}
