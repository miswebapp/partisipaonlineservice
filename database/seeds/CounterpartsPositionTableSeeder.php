<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\Position;
class CounterpartsPositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::truncate();
        Position::create(['alias'=>'DD','name'=>'Direitor Munisipiu']);
        Position::create(['alias'=>'KM','name'=>'Kontabelista Munisipiu']);
        Position::create(['alias'=>'EM','name'=>'Enjineiru Munisipiu']);
        Position::create(['alias'=>'MIS','name'=>'Ofisial MIS Munisipiu']);
        Position::create(['alias'=>'FFPA','name'=>'Fasilitador Finansas Postu Administrativu']);
        Position::create(['alias'=>'FSPA','name'=>'Fasilitador Sosial Postu Administrativu']);
        Position::create(['alias'=>'FTPA','name'=>'Fasilitador Tekniku Postu Administrativu']);
        Position::create(['alias'=>'SN','name'=>'Sosial Nasional']);
        Position::create(['alias'=>'EN','name'=>'Enjineiru Nasional']);
        Position::create(['alias'=>'MIS Nasional','name'=>'MIS Nasional']);
        Position::create(['alias'=>'MEN','name'=>'Monitorizasaun & Evaluasaun Nasional']);
        Position::create(['alias'=>'KN','name'=>'Kontabelista Nasional']);
        Position::create(['alias'=>'UO','name'=>'Unidade Operasional']);
        Position::create(['alias'=>'DP','name'=>'Direitora Perograma']);
        Position::create(['alias'=>'UAF','name'=>'Unidade Administrasaun & Finansas']);
        Position::create(['alias'=>'LOG','name'=>'Logistica']);
        Position::create(['alias'=>'D-SMASA','name'=>'Direitor Seitor Municipal Agua & Saneamentu']);
        Position::create(['alias'=>'FPA-SMASA  ','name'=>'Seitor Municipal Agua & Saneamentu']);
        Position::create(['alias'=>'O-SMASA','name'=>'Operasional Seitor Municipal Agua & Saneamentu']);     
    }
}
