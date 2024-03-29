<?php

namespace App\Http\Controllers\Admin\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Employment;

class EmploymentController extends Controller
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
        
        $user_employment = Employment::create([
            'employee_id' => str_replace('-','',$request['employee_startdate']).Str::limit(Str::upper($request['employee_email']),3,false),
            'user_id' => $request['user_id'],
            'position_id' => $request['employee_position'],
            'department_id' => $request['employee_department'],
            'employee_email' => $request['employee_email'],
            'employee_telephone' => $request['employee_telephone'],
            'employee_startdate' => $request['employee_startdate'],
            'employee_enddate' => $request['employee_enddate']
        ]);

        return redirect()->route('admin.users.show',$request['user_id'])->with('status_employment','User employment details added successfully');
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

        $employment_details = Employment::where('user_id',$request->user_id)->first();
        $employment_details->position_id = $request->employee_position;
        $employment_details->department_id = $request->employee_department;
        $employment_details->employee_email = $request->employee_email;
        $employment_details->employee_telephone = $request->employee_telephone;
        $employment_details->employee_startdate = $request->employee_startdate;
        $employment_details->employee_enddate = $request->employee_enddate;

        $employment_details->update();

        return redirect()->route('admin.users.show',$id)->with('status_profile','User profile updated successfully');
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
