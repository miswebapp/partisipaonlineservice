<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create(['code'=>'ADM','name' => 'Admin','details'=>'System Adiministrator']);
        Role::create(['code'=>'MGR','name' => 'Managers','details'=>'Program Senior Managers']);
        Role::create(['code'=>'COOR','name' => 'Coordinators','details'=>'Program Coordinators']);
        Role::create(['code'=>'ADV','name' => 'Advisors','details'=>'Program Advisors']);
        Role::create(['code'=>'USR','name' => 'User','details'=>'Normal Staff']);
    }
}
