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
        Role::create(['code'=>'USR','name' => 'User','details'=>'Normal Staff']);
    }
}
