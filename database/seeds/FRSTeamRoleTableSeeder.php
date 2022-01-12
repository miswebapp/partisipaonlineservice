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
        FrsRole::create(['name'=>'Team Member','description'=>'Level 1 - Team Member']);
        FrsRole::create(['name'=>'Field Coordinator','description'=>'Level 2 - Field Coordinator']);
        FrsRole::create(['name'=>'Nacional Coordinator','description'=>'Level 3 - Nacional Coordinator']);
        FrsRole::create(['name'=>'Managers','description'=>'Managers and Advisors']);
    }
}
