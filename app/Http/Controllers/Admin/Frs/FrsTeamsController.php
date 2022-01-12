<?php

namespace App\Http\Controllers\Admin\Frs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserDetails;
use App\SystemModule;
use App\Role;
use App\Models\Frs\Team;

class FrsTeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allusers = UserDetails::all();
        $maintitle="Team Management";
        $frsteams = Team::with('member')->get(); 
        // dd($frsteams);
        return view('admin.frs.teams', compact('frsteams','allusers'))->with('maintitle',$maintitle);
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
        $team = new Team();
        $team->alias = $request->alias;
        $team->name = $request->name;
        $team->description = $request->description;
        $team->save();
        return redirect()->route('admin.frs.teams.index')->with('status','New team added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $moduleusers = SystemModule::with('member')->where('id',1)->get();
        $frsteammembers = Team::with('member','memberrole')->where('id',$id)->get(); 
        $maintitle = 'Team '.$frsteammembers->first()->name.'  ('.$frsteammembers->first()->alias.')';
        
        return view('admin.frs.teams.show',compact('frsteammembers','moduleusers'))->with('maintitle',$maintitle);
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
    public function destroy($id)
    {
        //
    }
}
