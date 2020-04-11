<?php

use Illuminate\Database\Seeder;
use App\SystemModule;
class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SystemModule::truncate();
        SystemModule::create([
            'name' => 'Field Reporting System',
            'alias' => 'FRS',
            'controller_namespace' => 'App\Http\Controllers\Admin\Frs\/',
            'model_namespace' => 'App\Models\Frs\/',
            'view_namespace' => 'views\admin\frs/',
            'route_name' => 'admin.frs',
            'description' => 'Partisipa Field Reporting System',
        ]);
        SystemModule::create([
            'name' => 'Online Leave Aplication',
            'alias' => 'FRS',
            'controller_namespace' => 'App\Http\Controllers\Admin\Ola\/',
            'model_namespace' => 'App\Models\Ols\/',
            'view_namespace' => 'views\admin\ola/',
            'route_name' => 'admin.ola',
            'description' => 'Partisipa Online Leave Application',
        ]);
        SystemModule::create([
            'name' => 'Online Timesheet Aplication',
            'alias' => 'OTA',
            'controller_namespace' => 'App\Http\Controllers\Admin\Ota\/',
            'model_namespace' => 'App\Models\Ota\/',
            'view_namespace' => 'views\admin\ota/',
            'route_name' => 'admin.ota',
            'description' => 'Partisipa Online Timesheet',
        ]
    );
    }
}
