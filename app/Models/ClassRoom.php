<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    # Table Name
    protected $table = 'class';

    # Student Relationship
    public function student()
    {
        return $this->hasMany(Student::class, 'class_id', 'id');
    }

    # Teacher Relationship
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}
