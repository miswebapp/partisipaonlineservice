<?php

namespace App\Http\Controllers\Admin\Frs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frs\Team;

class FrsUserTeamController extends Controller
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
        
        $team = Team::find($request->team_id);       
        if($request->actions == "assign_team_member"){
            if(!$team->hasMember($request->users)){
                $team->member()->attach($request->users);
                return redirect()->route('admin.frs.teams.show',$request->team_id)->with('status_success','Team members added successfully');
            }
        }

        if($request->actions == "assign_team_coordinator"){
                if($team->hasPreviousCoordinator()){
                    $previous_coordinator = $team->getCoordinatorMemberId->first()->id;
                    // dd($previous_coordinator);
                    $team->member()->detach($previous_coordinator);
                    $team->member()->attach($previous_coordinator);
                }

                $team->member()->detach($request->user);
                $team->member()->attach($request->user,['role_id' => 3]);
                return redirect()->route('admin.frs.teams.show',$request->team_id)->with('status_success','Team coordinator added successfully');
        }
        

        return redirect()->route('admin.frs.teams.show',$request->team_id)->with('status_error','Unable to add , member exist');
        
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
        $team = Team::find($id);
        $team->member()->detach($request->user_id);
        return redirect()->route('admin.frs.teams.show',$id)->with('status_success','Team member removed successfully');
    }
}
