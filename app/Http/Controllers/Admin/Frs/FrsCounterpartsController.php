<?php

namespace App\Http\Controllers\Admin\Frs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frs\Counterpart;
use App\Models\Frs\Institution;
use App\Models\Frs\Position;
use App\Models\Frs\Municipal;



class FrsCounterpartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipals = Municipal::all();
        $institutions = Institution::all();
        $positions = Position::all();
        $counterparts = Counterpart::with('institution','position','municipal')->get();
        $maintitle="Counterparts Management";
        return view('admin.frs.counterparts',compact('counterparts','institutions','positions','municipals'))->with('maintitle',$maintitle);
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
        $counterpart = new Counterpart();
        $counterpart->name = $request->name;
        $counterpart->gender = $request->gender;
        $counterpart->municipal_id = $request->municipal_id;
        $counterpart->position_id = $request->position_id;
        $counterpart->institution_id = $request->institution_id;
        $counterpart->status = $request->status;
        $counterpart->save();
        return redirect()->route('admin.frs.counterparts.index')->with('status','Counterpat added successfully');

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
        $counterpart = Counterpart::find($id);
        $counterpart->name = $request->name;
        $counterpart->gender = $request->gender;
        $counterpart->municipal_id = $request->municipal_id;
        $counterpart->position_id = $request->position_id;
        $counterpart->institution_id = $request->institution_id;
        $counterpart->status = $request->status;

        $counterpart->update();
        return redirect()->route('admin.frs.counterparts.index')->with('status','Counterpat updated successfully');
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
