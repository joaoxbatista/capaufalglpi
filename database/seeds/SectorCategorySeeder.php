<?php

use Illuminate\Database\Seeder;
use App\Models\SectorCategory as SectorCategory;

class SectorCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo";

        SectorCategory::create([
            'name' => 'Sem subcategoria',
        	'icon' => null,
        	'sector_id' => 1,
        	'description' => $description
        ]);

        SectorCategory::create([

            'name' => 'Sem subcategoria',
            'icon' => null,
            'sector_id' => 2,
            'description' => $description
        ]);

        SectorCategory::create([

            'name' => 'Sem subcategoria',
            'icon' => null,
            'sector_id' => 3,
            'description' => $description
        ]);
    }
}
