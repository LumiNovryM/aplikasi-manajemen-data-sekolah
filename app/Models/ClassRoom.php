<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    # Table Name
    protected $table = 'class';

    public function student()
    {
        return $this->hasMany(Student::class, 'class_id', 'id');
    }
}
