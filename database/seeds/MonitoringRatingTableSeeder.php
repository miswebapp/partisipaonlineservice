<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\MonitoringTool;
class MonitoringRatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MonitoringTool::truncate();
        MonitoringTool::create(['name'=>'GFM 4 - Monitorizasaun Jestaun Finansas']);
        MonitoringTool::create(['name'=>'Formatu Monitorizasaun Enkontru Municipiu']);
        MonitoringTool::create(['name'=>'SF - Monitorizasaun Enkontru Akunta']);
        MonitoringTool::create(['name'=>'Formatu Monitorizasaun Enkontru Set']);
        MonitoringTool::create(['name'=>'TF9.3.1 - Edifisiu (gedung)']);
        MonitoringTool::create(['name'=>'TF9.3.2 - Ponte']);
        MonitoringTool::create(['name'=>'TF9.3.3 - Estrada']);
        MonitoringTool::create(['name'=>'TF9.3.4 - Irigasaun']);
        MonitoringTool::create(['name'=>'TF9.3.5 - Drenazen']);
        MonitoringTool::create(['name'=>'TF9.3.6 - Bee Mos & Saneamentu']);
        MonitoringTool::create(['name'=>'TF9.3.7 - Galeria (culvert)']);
        MonitoringTool::create(['name'=>'TF9.3.8 - Bareiras']);
        MonitoringTool::create(['name'=>'TF 11.2.2 – Folla Inspesaun Final']);
        MonitoringTool::create(['name'=>'SF4.7-CAM']);
        MonitoringTool::create(['name'=>'TF9.3.10 - Formatu Inspesaun ba Fatin Halimar']);
        MonitoringTool::create(['name'=>'Not Defined']);

    }
}
