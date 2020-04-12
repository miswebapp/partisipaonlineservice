<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\ActivityCategory;
class ActivityCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActivityCategory::truncate();
        ActivityCategory::create(['alias'=>'M','name'=>'Monitoring']);
        ActivityCategory::create(['alias'=>'P','name'=>'Project']);
        ActivityCategory::create(['alias'=>'R','name'=>'Regular']);
        ActivityCategory::create(['alias'=>'O','name'=>'Other']);
    }
}
