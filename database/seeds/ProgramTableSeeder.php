<?php

use Illuminate\Database\Seeder;

class ProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create(['name'=>'Programa Nasional Desenvolvimentu Suku','alias'=>'PNDS','description'=>'National Program for Village Development']);
        Program::create(['name'=>'Uma Policia OPS','alias'=>'Uma OPS','description'=>'Suco Police Housing']);
        Program::create(['name'=>'Fatin Halimar','alias'=>'FH','description'=>'Playground for kids']);
        Program::create(['name'=>'Konstrusaun Infraestrutura Educativo','alias'=>'KIE','description'=>'Konstruction for Educational Infrastructure']);
        Program::create(['name'=>'Parseria Hametin Dezenvolvimentu Suku','alias'=>'PARTISIPA','description'=>'Partnership for Sub National Development']);
    }
}
