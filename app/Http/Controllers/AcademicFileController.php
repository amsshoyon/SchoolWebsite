<?php

namespace App\Http\Controllers;
use App\Notice;
use Illuminate\Http\Request;
use App\Http\Requests\NoticeRequest;
use File;

class AcademicFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academics = Notice::get()->where('type','2');  //type 2 for academic file
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
    public function store(NoticeRequest $request)
    {
        $store = new Notice;

        if ($request->hasFile('file')) {

            $file_name = time().'.'.$request->file->getClientOriginalExtension();

            // Uplaod image
            $path= $request->file('file')->move(public_path('/files/'), $file_name);
            $store->file = $file_name;

        }   

        $store->title = $request["title"];
        $store->description = $request["description"];
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $academic = Notice::find($id);
        $academics = Notice::get()->where('type','2'); 
        return view('Dashboard.academic',compact('academics','academic')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoticeRequest $request, $id)
    {
        $update=Notice::findOrFail($id);

        if ($request->hasFile('file')) {

            if(file_exists(public_path('/files/'.$update->file))){
                File::delete('/files/'.$update->file);
            }
            
            $file_name = time().'.'.$request->file->getClientOriginalExtension();
            $path= $request->file('file')->move(public_path('/files/'),$file_name);
            $update->file = $file_name;

        }   
        $update->title = $request['title'];
        $update->description = $request['description'];

        $update->save();             
        return redirect('/Dashboard/academic/')->with('success', 'Notice Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        $delete = notice::find($id);

        if(unlink(public_path('/files/'.$delete->file))){
            $delete->delete();
            return back()->with('success', 'file Deleted');
        }
    }
}
