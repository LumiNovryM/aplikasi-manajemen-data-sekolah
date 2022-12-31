<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'name',
        'gender',
        'nis',
        'class_id'
    ];

    # Relasi One To Many (Inverse) / Many To One
    public function class()
    {
        return $this->belongsTo(ClassRoom::class, 'class_id', 'id');
    }

    # Relasi Many To Many 
    public function extracurriculars()
    {
        return $this->belongsToMany(Extracurricular::class, 'student_extracurricular', 'student_id', 'extracurricular_id');
    }
}
