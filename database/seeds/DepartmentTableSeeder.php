<?php

use Illuminate\Database\Seeder;
use App\Department;
class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::truncate();
        Department::create(['code'=>'SPT','name'=>'Strategy & Policy Team']);
        Department::create(['code'=>'SNT','name'=>'Sub-national Implementation Team']);
        Department::create(['code'=>'ELT','name'=>'Evidence & Learning Team']);
        Department::create(['code'=>'SET','name'=>'Strategic Engagement Team']);
        Department::create(['code'=>'OT','name'=>'Operation Team']);
    }
}
