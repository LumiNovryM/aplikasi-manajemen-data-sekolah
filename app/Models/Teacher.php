<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    # Fillabel Field Data
    public $fillable = [
        'name'
    ];

    # Relationship To Class [One To Many Relationship]
    public function class()
    {
        return $this->hasOne(ClassRoom::class);
    }

}
