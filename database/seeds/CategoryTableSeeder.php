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
        Category::create(['name' => 'Social']);
        Category::create(['name' => 'Finance']);
        Category::create(['name' => 'Technical']);
        Category::create(['name' => 'Water']);
        Category::create(['name' => 'Others']);
    }
}
