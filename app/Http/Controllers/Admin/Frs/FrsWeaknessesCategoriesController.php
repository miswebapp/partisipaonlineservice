<?php

namespace App\Http\Controllers\Admin\Frs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frs\WeaknessCategory;

class FrsWeaknessesCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = WeaknessCategory::all();
        $maintitle="Weaknesses Category Management";
        return view('admin.frs.weaknesscategories', compact('categories'))->with('maintitle',$maintitle);
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
        $category = new WeaknessCategory();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin.frs.weaknessescategories.index')->with('status','New weaknesses category added successfully');
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
        $category = WeaknessCategory::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->update();

        return redirect()->route('admin.frs.weaknessescategories.index')->with('status','Weaknesses category updated successfully');
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
