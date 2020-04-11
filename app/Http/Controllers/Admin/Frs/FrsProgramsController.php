<?php

namespace App\Http\Controllers\Admin\Frs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frs\Program;

class FrsProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();
        // dd($programs);
        $maintitle="Programs Management";
        return view('admin.frs.programs',compact('programs'))->with('maintitle',$maintitle);
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
        // dd($request->alias);
        $program = new Program();
        $program->alias = $request->alias;
        $program->name = $request->name;
        // $program->description = $request->description;
        $program->save();

        return redirect()->route('admin.frs.programs.index')->with('status','New program added successfully');

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
        $program = Program::find($id);
        $program->alias = $request->alias;
        $program->name = $request->name;
        $program->description = $request->description;
        $program->update();

        return redirect()->route('admin.frs.programs.index')->with('status','Program details updated successfully');
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
