<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Student;

use App\Enums\Gender;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'name' => 'John Doe',
                'roll_no' => 'S001',
                'email' => 'john.doe@example.com',
                'gender' => Gender::MALE,
                'dob' => '2005-01-15'
            ],
            [
                'name' => 'Jane Smith',
                'roll_no' => 'S002',
                'email' => 'jane.smith@example.com',
                'gender' => Gender::FEMALE,
                'dob' => '2006-02-20'
            ],
        ];
        
        // Student::insert($students);

        foreach ($students as $row) 
        {
            Student::create($row);
        }
    }
}
