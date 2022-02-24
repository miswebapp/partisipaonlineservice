<?php

use App\Models\Frs\Capacity;
use Illuminate\Database\Seeder;

class CapacityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Capacity::truncate();
        Capacity::create(['name'=>'Dependente (Dependent)','description'=>'FST controls the particular work function, may do most of the work, takes the decisions or is highly influential in the decision-making process.']);
        Capacity::create(['name'=>'Hatudu Dalan (Guided)','description'=>'FST still has a high level of control, but counterparts can undertake the straightforward elements of the function under supervision or guidance.']);
        Capacity::create(['name'=>'Ajuda (Assisted)','description'=>'Counterparts are now taking prime responsibility for the function, can handle most of the complex aspects and know when they need to ask for assistance.']);
        Capacity::create(['name'=>'Independente (Independent)','description'=>'Counterparts are now fully competent to do the whole function.']);
        Capacity::create(['name'=>'Seluk (Not Required)','description'=>'Counterparts are parts of the Team, idealy for nacional staffs.']);
    }
}
