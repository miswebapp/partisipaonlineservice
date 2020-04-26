<?php

namespace App\Http\Controllers\Admin\Frs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frs\Weakness;
use App\Models\Frs\WeaknessCategory;

class FrsWeaknessesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = WeaknessCategory::all();
        $weaknesses = Weakness::all();
        $maintitle="Weaknesses Management";
        return view('admin.frs.weaknesses', compact('weaknesses','categories'))->with('maintitle',$maintitle);
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
        $weakness = new Weakness();
        $weakness->name = $request->name;
        $weakness->category_id = $request->category_id;
        $weakness->description = $request->description;
        $weakness->save();

        return redirect()->route('admin.frs.weaknesses.index')->with('status','New weaknesses added successfully');
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
        $weakness = Weakness::find($id);
        $weakness->name = $request->name;
        $weakness->category_id = $request->category_id;
        $weakness->description = $request->description;
        $weakness->update();

        return redirect()->route('admin.frs.weaknesses.index')->with('status','Weaknesses updated successfully');
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
