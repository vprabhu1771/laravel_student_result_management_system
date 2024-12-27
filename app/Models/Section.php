<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The groups that belong to the section.
     */
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_section', 'section_id', 'group_id');
    }

    
    /**
     * Relationship with GroupSection model
     */
    public function groupSections()
    {
        return $this->hasMany(GroupSection::class, 'section_id');
    }
}
