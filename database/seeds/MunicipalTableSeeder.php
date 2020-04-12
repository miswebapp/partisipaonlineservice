<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\Municipal;

class MunicipalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipal::truncate();
        Municipal::create(['name'=>'Aileu']);
        Municipal::create(['name'=>'Ainaro']);
        Municipal::create(['name'=>'Baucau']);
        Municipal::create(['name'=>'Bobonaro']);
        Municipal::create(['name'=>'Covalima']);
        Municipal::create(['name'=>'Dili']);
        Municipal::create(['name'=>'Ermera']);
        Municipal::create(['name'=>'Lautem']);
        Municipal::create(['name'=>'Liquica']);
        Municipal::create(['name'=>'Manatuto']);
        Municipal::create(['name'=>'Manufahi']);
        Municipal::create(['name'=>'Oecussi']);
        Municipal::create(['name'=>'Viqueque']);
        Municipal::create(['name'=>'Nacional']);
    }
}
