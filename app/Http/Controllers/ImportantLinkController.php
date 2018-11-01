<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImportantLink;
class ImportantLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $importantlinks = ImportantLink::all();
        return view('Dashboard.importantlink', compact('importantlinks'));
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
        $importantlinks = new ImportantLink;
        $this->validate($request, [
            'title'=>'required',
            'link'=>'required'
        ]);
        $importantlinks->title = $request["title"];
        $importantlinks->link = $request["link"];
        $importantlinks->save();
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
        $importantlinks = ImportantLink::find($id);
        return view('Dashboard.editImportantLink', compact('importantlinks'));
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
        $importantlinks = ImportantLink::find($id);
        $importantlinks->title = $request["title"];
        $importantlinks->link = $request["link"];
        $importantlinks->save();
        return redirect('/Dashboard/importantlink')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $importantlinks = ImportantLink::find($id);
        $importantlinks->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
