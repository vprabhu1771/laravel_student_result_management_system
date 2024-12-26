<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'roll_no',
        'email',
        'gender',
        'dob'
    ];

    /**
     * The group sections that the student belongs to.
     */
    public function groupSections()
    {
        return $this->belongsToMany(GroupSection::class, 'student_group_section', 'student_id', 'group_section_id')
                    ->withTimestamps();
    }
}
