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
        Cycle::truncate();
        Cycle::create(['name'=>'Cycle 1','description'=>'PNDS Regular Cycle Implementation']);
        Cycle::create(['name'=>'Cycle 2','description'=>'PNDS Regular Cycle Implementation']);
        Cycle::create(['name'=>'Cycle 3','description'=>'PNDS Regular Cycle Implementation']);
        Cycle::create(['name'=>'Cycle 4','description'=>'PNDS Regular Cycle Implementation']);
        Cycle::create(['name'=>'UKL','description'=>'Uma Kbiit Laek Implementation']);
        Cycle::create(['name'=>'UKL 2','description'=>'Uma Kbiit Laek Implementation']);
        Cycle::create(['name'=>'UKL 3','description'=>'Uma Kbiit Laek Implementation']);
        Cycle::create(['name'=>'RSS','description'=>'Rehabilitasaun Sede Suco Implementation']);
        Cycle::create(['name'=>'RKRE 2','description'=>'Resilensia Komunitaria Rekoperasaun Ekonomia']);
    }
}
