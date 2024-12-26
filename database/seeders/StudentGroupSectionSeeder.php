<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Student;

use App\Models\GroupSection;

class StudentGroupSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $S001_john_doe = Student::where('roll_no', 'S001')->first();

        $S002_jane_smith = Student::where('roll_no', 'S002')->first();
        
        $a_section = GroupSection::where('group_id', '1') // Group 1
                          ->where('section_id', 'A') // Section A
                          ->first();

        $b_section = GroupSection::where('group_id', '1') // Group 1
                          ->where('section_id', 'B') // Section B
                          ->first();


        $student_group_sections = [
            [
                'student_id' => $S001_john_doe->id,
                'group_section_id' => $a_section->id,
            ],
            [
                'student_id' => $S002_jane_smith->id,
                'group_section_id' => $b_section->id,
            ]
        ];
        
        // StudentGroupSection::insert($student_group_sections);

        foreach ($student_group_sections as $row) 
        {
            StudentGroupSection::create($row);
        }
    }
}
