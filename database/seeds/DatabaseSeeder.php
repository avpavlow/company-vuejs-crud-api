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
        $this->call(InitSeeder::class);
        $this->call(PeopleSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(PositionsSeeder::class);
        $this->call(UserContributionsSeeder::class);
    }
}
