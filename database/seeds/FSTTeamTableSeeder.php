<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\Team;

class FSTTeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::truncate();
        Team::create(['alias'=>'AICO','name'=>'Ainaro,Covalima']);
        Team::create(['alias'=>'AILA','name'=>'Aileu,Lautem']);
        Team::create(['alias'=>'MAVI','name'=>'Manatuto,Viqueqe']);
        Team::create(['alias'=>'DIMA','name'=>'Dili,Manufahi']);
        Team::create(['alias'=>'LIRA','name'=>'Liquica,RAEOA']);
        Team::create(['alias'=>'BCU','name'=>'Baucau']);
        Team::create(['alias'=>'ERM','name'=>'Ermera']);
        Team::create(['alias'=>'BOB','name'=>'Bobonaro']);
    }
}
