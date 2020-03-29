<?php

namespace App\Http\Controllers\Admin\Basic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserDetails;
use App\Team;
use App\Position;
use App\Department;
use App\Role;
use App\SystemModule;
use App\Gender;
use App\Nationality;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genders = Gender::all();
        $nationalities = Nationality::all();
        $users = UserDetails::all();
        return view('admin.users.index',compact('users' , 'genders','nationalities'));
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
       $user = new UserDetails();
       $user->niss = $request->niss;
       $user->firstname = $request->firstname;
       $user->lastname = $request->lastname;
       $user->alias = $request->alias;
       $user->gender = $request->gender;
       $user->dob = $request->dob;
       $user->email = $request->email;
       $user->telephone = $request->telephone;
       $user->nationality = $request->nationality;
       $user->save();

       return redirect()->route('admin.users.index')->with('status','New personnel details is added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genders = Gender::all();
        $nationalities = Nationality::all();
        $modules = SystemModule::all();
        $positions = Position::all();
        $departments = Department::all();
        $user = UserDetails::with('account','employment','department','position','modules')->where('id',$id)->get();
        // dd($user);
        return view('admin.users.show')->with(['user'=>$user , 'positions'=>$positions, 'departments'=>$departments , 'modules'=>$modules,'genders'=>$genders,'nationalities'=>$nationalities]);
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
        $user = UserDetails::where('id',$id);
        $user->niss = $request->niss;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->alias = $request->alias;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->nationality = $request->nationality;
        $user->update();
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
