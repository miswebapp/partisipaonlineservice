<?php

namespace App\Http\Controllers\Admin\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserDetails;
use App\Models\Frs\Team;
use App\UserModule;
use App\Module;
use App\Role;

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
        $module = $request->module_id;
        $users = $request->users;

        if(!empty($users)){
            foreach($users as $user){
                $sysmodule = new UserModule();
                if( $sysmodule::where('user_id',$user)->where('module_id',$module)->count() == 0){
                    $sysmodule->user()->associate($user);
                    $sysmodule->module()->associate($module);
                    $sysmodule->save();
                }
            }
        }
     
        return redirect()->route('admin.usermodules.show',$request['module_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = UserDetails::all();
        $module = Module::find($id);
        $usermodules = UserModule::with('user','module')->where('module_id',$id)->get();
        // dd($usermodules);
        // dd($users);
        return view('admin.modules.show',compact('module','users','usermodules'));  
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        UserModule::where('id',$id)->delete();
        return redirect()->route('admin.usermodules.show',$request->module_id)->with('status','User removed sucsessfully');

    }
}
