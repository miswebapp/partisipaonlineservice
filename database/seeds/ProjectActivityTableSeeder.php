<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\ProjectActivity;
class ProjectActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectActivity::truncate();
        ProjectActivity::create(['name'=>'Extensaun']);
        ProjectActivity::create(['name'=>'Fornese (Suplai)']);
        ProjectActivity::create(['name'=>'Instalasaun']);
        ProjectActivity::create(['name'=>'Konstrusaun']);
        ProjectActivity::create(['name'=>'Reabilitasaun']);

    }
}
