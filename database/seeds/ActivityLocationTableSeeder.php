<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\ActivityLocation;
class ActivityLocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActivityLocation::truncate();
        ActivityLocation::create(['alias'=>'M','level'=>'Municipal']);
        ActivityLocation::create(['alias'=>'PA','level'=>'Administrative Post']);
        ActivityLocation::create(['alias'=>'S','level'=>'Suco']);
    }
}
