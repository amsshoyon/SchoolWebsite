<?php

namespace App\Http\Controllers;
use App\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AcademicFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academics = Notice::get()->where('type','2');  //type 1 for notice
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
        $notice = new Notice;

        $image_name = time().'.'.$request->image->getClientOriginalExtension();

        // Uplaod image
        $path= $request->file('image')->storeAs('public/files/', $image_name);

        $notice->file = $image_name;

        $notice->title = $request["title"];
        $notice->type = $request["type"];

        $notice->save();
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
        $notice = Notice::find($id);
        if(Storage::delete('public/files/'.$notice->file)){
            $notice->delete();
            return back()->with('success', 'Deleted');
        }
    }
}
