<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LinkRequest;
use App\Link;

class ImpLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ImpLinks = Link::get()->where('type','2');   //1 => e-link, 2 =>imp link , 3 => social
        return view('Dashboard.ImpLink', compact('ImpLinks'));
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
    public function store(LinkRequest $request)
    {
        $store = new Link;
        $store->title = $request["title"];
        $store->link = $request["link"];
        $store->type = $request["type"];
        $store->save();
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
        $ImpLink = Link::find($id);
        $ImpLinks = Link::get()->where('type','2');
        return view('Dashboard.ImpLink', compact('ImpLinks','ImpLink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LinkRequest $request, $id)
    {
        $update = Link::find($id);
        $update->title = $request["title"];
        $update->link = $request["link"];
        $update->save();
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Link::find($id);
        $delete->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
