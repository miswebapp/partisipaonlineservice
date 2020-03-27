<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\Cycle;
class CycleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cycle::create(['name'=>'Cycle 1']);
        Cycle::create(['name'=>'Cycle 2']);
        Cycle::create(['name'=>'Cycle 3']);
        Cycle::create(['name'=>'Cycle 4']);
    }
}
