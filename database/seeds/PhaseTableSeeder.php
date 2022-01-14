<?php

use App\Models\Frs\Phase;
use Illuminate\Database\Seeder;

class PhaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phase::truncate();
        Phase::create(['name'=>'Phase 1','description'=>'Phased suco implementation']);
        Phase::create(['name'=>'Phase 1','description'=>'Phased suco implementation']);
        Phase::create(['name'=>'Phase 1','description'=>'Phased suco implementation']);
    }
}
