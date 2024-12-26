<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGroupSection extends Model
{
    use HasFactory;

    // Define the relationship with the Student model
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
