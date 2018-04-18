<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SectorSeeder::class);
        $this->call(SectorCategorySeeder::class);
        $this->call(ServiceSeeder::class);
    }
}
