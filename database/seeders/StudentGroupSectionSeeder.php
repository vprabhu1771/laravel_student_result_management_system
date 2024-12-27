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
        // Fetch students by roll_no
        $S001_john_doe = Student::where('roll_no', 'S001')->first();
        $S002_jane_smith = Student::where('roll_no', 'S002')->first();

        // Fetch group sections by group_id and section_id
        $a_section = GroupSection::where('group_id', 1) // Group 1
            ->whereHas('section', function ($query) {
                $query->where('name', 'A'); // Section A
            })->first();

        $b_section = GroupSection::where('group_id', 1) // Group 1
            ->whereHas('section', function ($query) {
                $query->where('name', 'B'); // Section B
            })->first();

        // Check if required data exists
        if (!$S001_john_doe || !$S002_jane_smith || !$a_section || !$b_section) {
            $missingData = [];
            if (!$S001_john_doe) $missingData[] = 'Student S001';
            if (!$S002_jane_smith) $missingData[] = 'Student S002';
            if (!$a_section) $missingData[] = 'Group Section A';
            if (!$b_section) $missingData[] = 'Group Section B';

            throw new \Exception('Missing data: ' . implode(', ', $missingData));
        }

        // Prepare seed data
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

        // Insert the data
        foreach ($student_group_sections as $row) {
            \App\Models\StudentGroupSection::create($row);
        }
    }
}
