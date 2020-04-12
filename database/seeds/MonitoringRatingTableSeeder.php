<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\MonitoringRating;
class MonitoringRatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MonitoringRating::truncate();
        MonitoringRating::create(['name'=>'Satisfatoriu','description'=>'Satisfatoriu / Diak (baik)']);
        MonitoringRating::create(['name'=>'Moderadu','description'=>'Moderadu / Naton (sedang)']);
        MonitoringRating::create(['name'=>'La satisfatoriu','description'=>'La satisfatoriu  / La dun diak (buruk)']);
    }
}
