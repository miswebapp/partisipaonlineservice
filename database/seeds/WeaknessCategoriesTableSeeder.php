<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\WeaknessCategory;
class WeaknessCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WeaknessCategory::truncate();
        WeaknessCategory::create(['name'=>'Kapasidade','description'=>'']);
        WeaknessCategory::create(['name'=>'Komunikasaun','description'=>'']);
        WeaknessCategory::create(['name'=>'Kordenasaun','description'=>'']);
        WeaknessCategory::create(['name'=>'Supervizaun','description'=>'']);
        WeaknessCategory::create(['name'=>'Monitorizasaun','description'=>'']);
        WeaknessCategory::create(['name'=>'Indikasaun maljestaun','description'=>'']);
        WeaknessCategory::create(['name'=>'Seluk','description'=>'']);
    }
}
