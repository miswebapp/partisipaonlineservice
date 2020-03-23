<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\Project;
class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::truncate();
        Project::create(['name'=>'Bareiras (Tembok Penahan Tanah)']);
        Project::create(['name'=>'Bee Kanu (Sekundaria/kanu distribuisaun)']);
        Project::create(['name'=>'Drenazen']);
        Project::create(['name'=>'Eskada Betaun - Eskada Passeio']);
        Project::create(['name'=>'Eskola Infantil']);
        Project::create(['name'=>'Eskola Pre-Secondaria']);
        Project::create(['name'=>'Eskola Primaria']);
        Project::create(['name'=>'Eskola Secondaria']);
        Project::create(['name'=>'Estrada Betaun']);
        Project::create(['name'=>'Estrada Britas']);
        Project::create(['name'=>'Estrada Rai']);
        Project::create(['name'=>'Estrada Telford']);
        Project::create(['name'=>'Fasilidade Lavandaria Publiku']);
        Project::create(['name'=>'Fasilidade Saneamentu Publiku(MCK)']);
        Project::create(['name'=>'Fatin Lixu Publiku']);
        Project::create(['name'=>'Galeria Estrada ((Pipe Culvert/Box Culvert)']);
        Project::create(['name'=>'Klinika - Maternidade']);
        Project::create(['name'=>'Klinika - Postu Saude']);
        Project::create(['name'=>'Klinika - Sentru Saude Komunitario']);
        Project::create(['name'=>'Labarik nia Fatin Halimar iha Eskola']);
        Project::create(['name'=>'Mini Merkadu']);
        Project::create(['name'=>'Moru ba Eskola']);
        Project::create(['name'=>'Moru ba Klinika']);
        Project::create(['name'=>'Painel Solar']);
        Project::create(['name'=>'Pasadera']);
        Project::create(['name'=>'Plat Deker']);
        Project::create(['name'=>'Ponte - Ai']);
        Project::create(['name'=>'Ponte - Betaun']);
        Project::create(['name'=>'Portu Peska']);
        Project::create(['name'=>'Rampa ba Fasilidade Publiku']);
        Project::create(['name'=>'Residensia ba Professores']);
        Project::create(['name'=>'Residensia Pessoal Saude']);
        Project::create(['name'=>'Satan Rai (Bronjong)']);
        Project::create(['name'=>'Sintina Publiku']);
        Project::create(['name'=>'Sistema Bee Mos - Gravitasaun']);
        Project::create(['name'=>'Sistema Bee Mos - Bomba']);
        Project::create(['name'=>'Trotoar / Passeio']);
        Project::create(['name'=>'Sala ou Dapur Merenda Eskolar']);
        Project::create(['name'=>'Uma OPS']);
        Project::create(['name'=>'Fatin Halimar']);
        Project::create(['name'=>'Not Defined']);
        Project::create(['name'=>'Seluk....']);

    }
}
