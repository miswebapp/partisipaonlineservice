<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\Institution;
class InstitutionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institution::truncate();
        Institution::create(['alias'=>'PNDS','name'=>'Programa Nasional Desenvolvimentu Suku']);
        Institution::create(['alias'=>'SMASA','name'=>'Seitor Munisipal Agua e Saneamentu']);
        Institution::create(['alias'=>'DNSAS','name'=>'Diresaun Nasional Agua e Saneamentu']);
    }
}
