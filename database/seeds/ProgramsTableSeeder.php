<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\Program;
class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::truncate();
        Program::create(['alias'=>'PNDS','name'=>'Programa Nasional Desenvolvimentu Suku','description'=>'']);
        Program::create(['alias'=>'PARTISIPA','name'=>'Parseria Hametin Dezenvolvimentu Suku no Administrasaun Munisipio','description'=>'']);
        Program::create(['alias'=>'KIE','name'=>'Konstrusaun Uma Edukasaun','description'=>'']);
        Program::create(['alias'=>'OPS','name'=>'Uma Policia Suco','description'=>'']);
        Program::create(['alias'=>'PG','name'=>'Play Ground','description'=>'']);
    }
}
