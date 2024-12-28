<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupSection extends Model
{
    use HasFactory;

    protected $table = 'group_section';

    protected $fillable = ['group_id', 'section_id'];

    /**
     * The students that belong to the group section.
     */
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_group_section', 'group_section_id', 'student_id')
                    ->withTimestamps();
    }

    /**
     * Relationship with Section model
     */
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    /**
     * Relationship with Group model
     */
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}
