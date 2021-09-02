<?php

use Illuminate\Database\Seeder;
use App\Module;
class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::truncate();
        Module::create([
            'name' => 'Field Reporting System',
            'alias' => 'FRS',
            'controller_namespace' => 'App\Http\Controllers\Admin\Frs\/',
            'model_namespace' => 'App\Models\Frs\/',
            'view_namespace' => 'views\admin\frs/',
            'route_name' => 'admin.frs',
            'status' => 1,
            'description' => 'Partisipa Field Reporting System',
        ]);
        Module::create([
            'name' => 'Online Leave Aplication',
            'alias' => 'OLA',
            'controller_namespace' => 'App\Http\Controllers\Admin\Ola\/',
            'model_namespace' => 'App\Models\Ols\/',
            'view_namespace' => 'views\admin\ola/',
            'route_name' => 'admin.ola',
            'status' => 1,
            'description' => 'Partisipa Online Leave Application',
        ]);
        Module::create([
            'name' => 'Online Timesheet Aplication',
            'alias' => 'OTA',
            'controller_namespace' => 'App\Http\Controllers\Admin\Ota\/',
            'model_namespace' => 'App\Models\Ota\/',
            'view_namespace' => 'views\admin\ota/',
            'route_name' => 'admin.ota',
            'status' => 1,
            'description' => 'Partisipa Online Timesheet',
        ]
    );
    }
}
