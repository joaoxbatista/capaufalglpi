<?php

use Illuminate\Database\Seeder;
use App\Models\Sector;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sector::create([
            'id' => 1,
            'name' => 'Manutenção',
            'description' => 'some description here'
        ]);

        Sector::create([
            'id' => 2,
            'name' => 'Redes',
            'description' => 'some description here'
        ]);

        Sector::create([
            'id' => 3,
            'name' => 'Sistemas',
            'description' => 'some description here'
        ]);
    }
}
