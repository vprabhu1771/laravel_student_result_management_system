<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Section;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            [
                'name' => 'A'                
            ],
            [
                'name' => 'B'
            ],
            [
                'name' => 'C'
            ],
            [
                'name' => 'D'
            ],
        ];
        
        // Section::insert($sections);

        foreach ($sections as $row) 
        {
            Section::create($row);
        }
    }
}
