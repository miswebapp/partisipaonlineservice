<?php

use Illuminate\Database\Seeder;
use App\Gender;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::truncate();
        Gender::create(['abbr'=>'M','name'=>'Male']);
        Gender::create(['abbr'=>'F','name'=>'Female']);
    }
}
