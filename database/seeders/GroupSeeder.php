<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            [
                'name' => 'First',
                'numberic' => '1'
            ],
            [
                'name' => 'Second',
                'numberic' => '2'
            ],
            [
                'name' => 'Third',
                'numberic' => '3'
            ],
        ];
        
        // Group::insert($groups);

        foreach ($groups as $row) 
        {
            Group::create($row);
        }
    }
}
