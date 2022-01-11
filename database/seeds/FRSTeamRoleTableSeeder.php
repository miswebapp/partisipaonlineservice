<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\FrsRole;

class FRSTeamRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FrsRole::truncate();
        FrsRole::create(['name'=>'Field Coordinator','description'=>'Field Coordinator']);
        FrsRole::create(['name'=>'Nacional Coordinator','description'=>'Nacional Coordinator']);
        FrsRole::create(['name'=>'Advisors','description'=>'Advisors']);
        FrsRole::create(['name'=>'Managers','description'=>'Manager']);
    }
}
