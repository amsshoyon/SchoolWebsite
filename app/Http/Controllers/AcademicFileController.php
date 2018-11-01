<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AcademicFile;
class AcademicFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academics = AcademicFile::all();
        return view('Dashboard.academic', compact('academics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $academics = new AcademicFile;
        $this->validate($request, [
            'title'=>'required',
            'file'=>'required'
        ]);
        $academics->title = $request["title"];
        $academics->file = $request["file"];
        $academics->save();
        return back()->with('success', 'Added Successfully');
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
        $academics = AcademicFile::find($id);
        return view('Dashboard.editAcademic', compact('academics'));
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
        $this->validate($request, [
            'title'=>'required',
            'file'=>'required'
        ]);
        $academics = AcademicFile::find($id);
        $academics->title = $request["title"];
        $academics->file = $request["file"];
        $academics->save();
        return redirect('/Dashboard/academic')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $academics = AcademicFile::find($id);
        $academics->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
