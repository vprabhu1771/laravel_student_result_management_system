<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Group;

use App\Models\Section;

use App\Models\GroupSection;

class GroupSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $first_group = Group::where('name', 'First')->first();
        
        $a_section = Section::where('name', 'A')->first();

        $b_section = Section::where('name', 'B')->first();

        $c_section = Section::where('name', 'C')->first();

        $d_section = Section::where('name', 'D')->first();

        $group_sections = [
            [
                'group_id' => $first_group->id,
                'section_id' => $a_section->id,
            ],
            [
                'group_id' => $first_group->id,
                'section_id' => $b_section->id,
            ],
            [
                'group_id' => $first_group->id,
                'section_id' => $c_section->id,
            ],
            [
                'group_id' => $first_group->id,
                'section_id' => $d_section->id,
            ],
        ];
        
        // GroupSection::insert($group_sections);

        foreach ($group_sections as $row) 
        {
            GroupSection::create($row);
        }
    }
}
