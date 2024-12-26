<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupSection extends Model
{
    use HasFactory;

    /**
     * The students that belong to the group section.
     */
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_group_section', 'group_section_id', 'student_id')
                    ->withTimestamps();
    }
}
