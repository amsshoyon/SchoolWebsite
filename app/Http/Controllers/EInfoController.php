<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EInfo;
class EInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $einfos = EInfo::all();
        return view('Dashboard.einfo', compact('einfos'));
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
        $einfos = new EInfo;
        $this->validate($request, [
            'title'=>'required',
            'link'=>'required'
        ]);
        $einfos->title = $request["title"];
        $einfos->link = $request["link"];
        $einfos->save();
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
        $einfos = EInfo::find($id);
        return view('Dashboard.editEinfo', compact('einfos'));
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
            'link'=>'required'
        ]);
        $einfos = EInfo::find($id);
        $einfos->title = $request["title"];
        $einfos->link = $request["link"];
        $einfos->save();
        return redirect('/Dashboard/einfo')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $einfos = EInfo::find($id);
        $einfos->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
