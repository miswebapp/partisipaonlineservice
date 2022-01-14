<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Social','description'=>'']);
        Category::create(['name' => 'Finance','description'=>'']);
        Category::create(['name' => 'Technical','description'=>'']);
        Category::create(['name' => 'Water','description'=>'']);
        Category::create(['name' => 'Decentralization','description'=>'']);
        Category::create(['name' => 'Others','description'=>'']);
    }
}
