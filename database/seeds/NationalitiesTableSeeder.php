<?php

use Illuminate\Database\Seeder;
use App\Nationality;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nationality::truncate();
        Nationality::create(['name'=>'Australia']);
        Nationality::create(['name'=>'Belgium']);
        Nationality::create(['name'=>'Germany']);
        Nationality::create(['name'=>'Indonesia']);
        Nationality::create(['name'=>'Italia']);
        Nationality::create(['name'=>'Timor Leste']);
        Nationality::create(['name'=>'United Kingdom']);
        Nationality::create(['name'=>'United States']);

    }
}
