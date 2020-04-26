<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\Posto;
class PostoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posto::truncate();
        Posto::create(['municipal_id'=>'0','name'=>'Not Applicable']);
        Posto::create(['municipal_id'=>'1','name'=>'Aileu_Vila']);
        Posto::create(['municipal_id'=>'1','name'=>'Laulara']);
        Posto::create(['municipal_id'=>'1','name'=>'Liquidoe']);
        Posto::create(['municipal_id'=>'1','name'=>'Remexio']);
        Posto::create(['municipal_id'=>'2','name'=>'Ainaro_Vila']);
        Posto::create(['municipal_id'=>'2','name'=>'Hatu_Builico']);
        Posto::create(['municipal_id'=>'2','name'=>'Hatu_Udo']);
        Posto::create(['municipal_id'=>'2','name'=>'Maubisse']);
        Posto::create(['municipal_id'=>'3','name'=>'Baguia']);
        Posto::create(['municipal_id'=>'3','name'=>'Baucau_Vila']);
        Posto::create(['municipal_id'=>'3','name'=>'Laga']);
        Posto::create(['municipal_id'=>'3','name'=>'Quelicai']);
        Posto::create(['municipal_id'=>'3','name'=>'Vemase']);
        Posto::create(['municipal_id'=>'3','name'=>'Venilale']);
        Posto::create(['municipal_id'=>'4','name'=>'Atabae']);
        Posto::create(['municipal_id'=>'4','name'=>'Balibo']);
        Posto::create(['municipal_id'=>'4','name'=>'Bobonaro_Vila']);
        Posto::create(['municipal_id'=>'4','name'=>'Cailaco']);
        Posto::create(['municipal_id'=>'4','name'=>'Lolotoe']);
        Posto::create(['municipal_id'=>'4','name'=>'Maliana']);
        Posto::create(['municipal_id'=>'5','name'=>'Fatululik']);
        Posto::create(['municipal_id'=>'5','name'=>'Fatumea']);
        Posto::create(['municipal_id'=>'5','name'=>'Fohoren']);
        Posto::create(['municipal_id'=>'5','name'=>'Maucatar']);
        Posto::create(['municipal_id'=>'5','name'=>'Suai']);
        Posto::create(['municipal_id'=>'5','name'=>'Tilomar']);
        Posto::create(['municipal_id'=>'5','name'=>'Zumalai']);
        Posto::create(['municipal_id'=>'6','name'=>'Atauro']);
        Posto::create(['municipal_id'=>'6','name'=>'Cristo_Rei']);
        Posto::create(['municipal_id'=>'6','name'=>'Dom_Aleixo']);
        Posto::create(['municipal_id'=>'6','name'=>'Metinaro']);
        Posto::create(['municipal_id'=>'6','name'=>'Nain_Feto']);
        Posto::create(['municipal_id'=>'6','name'=>'Vera_Cruz']);
        Posto::create(['municipal_id'=>'7','name'=>'Atsabe']);
        Posto::create(['municipal_id'=>'7','name'=>'Ermera_Vila']);
        Posto::create(['municipal_id'=>'7','name'=>'Hatolia']);
        Posto::create(['municipal_id'=>'7','name'=>'Letefoho']);
        Posto::create(['municipal_id'=>'7','name'=>'Railaco']);
        Posto::create(['municipal_id'=>'8','name'=>'Iliomar']);
        Posto::create(['municipal_id'=>'8','name'=>'Lautem_Vila']);
        Posto::create(['municipal_id'=>'8','name'=>'Lospalos']);
        Posto::create(['municipal_id'=>'8','name'=>'Luro']);
        Posto::create(['municipal_id'=>'8','name'=>'Tutuala']);
        Posto::create(['municipal_id'=>'9','name'=>'Bazartete']);
        Posto::create(['municipal_id'=>'9','name'=>'Liquica']);
        Posto::create(['municipal_id'=>'9','name'=>'Maubara']);
        Posto::create(['municipal_id'=>'10','name'=>'Barique_Natarbora']);
        Posto::create(['municipal_id'=>'10','name'=>'Laclo']);
        Posto::create(['municipal_id'=>'10','name'=>'Laclubar']);
        Posto::create(['municipal_id'=>'10','name'=>'Laleia']);
        Posto::create(['municipal_id'=>'10','name'=>'Manatuto_Vila']);
        Posto::create(['municipal_id'=>'10','name'=>'Soibada']);
        Posto::create(['municipal_id'=>'11','name'=>'Alas']);
        Posto::create(['municipal_id'=>'11','name'=>'Fatuberliu']);
        Posto::create(['municipal_id'=>'11','name'=>'Same']);
        Posto::create(['municipal_id'=>'11','name'=>'Turiscai']);
        Posto::create(['municipal_id'=>'12','name'=>'Nitibe']);
        Posto::create(['municipal_id'=>'12','name'=>'Oesilo']);
        Posto::create(['municipal_id'=>'12','name'=>'Pante_Macasar']);
        Posto::create(['municipal_id'=>'12','name'=>'Passabe']);
        Posto::create(['municipal_id'=>'13','name'=>'Lacluta']);
        Posto::create(['municipal_id'=>'13','name'=>'Ossu']);
        Posto::create(['municipal_id'=>'13','name'=>'Uato_Carbau']);
        Posto::create(['municipal_id'=>'13','name'=>'Uato_Lari']);
        Posto::create(['municipal_id'=>'13','name'=>'Viqueque_Vila']);

    }
}
