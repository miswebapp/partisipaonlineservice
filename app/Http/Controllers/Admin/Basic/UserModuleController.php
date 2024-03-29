<?php

namespace App\Http\Controllers\Admin\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserDetails;
use App\Models\Frs\Team;
use App\SystemModule;

class UserModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->location == 'frs'){
            $module = SystemModule::where('alias','FRS')->first();
            if(empty($module)){
                return redirect()->route('admin.frs.users.index')->with('error','Unable to add user to the module, Please create the module first');
            }
            $module->member()->attach($request->users);
            return redirect()->route('admin.frs.users.index')->with('status','Users added sucsessfully');
        }

        $user = UserDetails::find($request->user_id);
        $user->sysmodules()->sync($request->modules);        
        return redirect()->route('admin.users.show',$request['user_id'])->with('status_user_module','User system module added successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if($request->location == 'frs'){
            $module = SystemModule::where('alias','FRS')->first();
            $module->member()->detach($id);
            return redirect()->route('admin.frs.users.index')->with('status','User removed sucsessfully');
        }
    }
}
