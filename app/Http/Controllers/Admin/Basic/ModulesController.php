<?php

namespace App\Http\Controllers\Admin\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Module;
use App\UserDetails;
use App\UserModule;
use App\Role;

class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::all();
        return view('admin.modules.index')->with('modules',$modules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Module::create([
            'alias' => $request['alias'],
            'name' => $request['name'],
            'controller_namespace' => $request['controller_namespace'],
            'model_namespace' => $request['model_namespace'],
            'view_namespace' => $request['view_namespace'],
            'route_name' => $request['route_name'],
            'status' => 1,
            'description' => $request['description']
        ]);

        return redirect()->route('admin.modules.index')->with('status','Module created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $module = UserModule::where('id',$id)->first();
        $module->alias = $request['alias'];
        $module->name = $request['name'];
        $module->controller_namespace = $request['controller_namespace'];
        $module->model_namespace = $request['model_namespace'];
        $module->view_namespace = $request['view_namespace'];
        $module->route_name = $request['route_name'];
        $module->description = $request['description'];

        $module->update();

        return redirect()->route('admin.modules.index')->with('status','Application module details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
