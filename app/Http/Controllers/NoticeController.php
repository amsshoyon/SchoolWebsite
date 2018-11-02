<?php

namespace App\Http\Controllers;
use App\Notice;
use Illuminate\Http\Request;
use App\Http\Requests\NoticeRequest;
use File;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::get()->where('type','1');  //type 1 for notice
        return view('Dashboard.notice', compact('notices'));
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
        $notice = new Notice;

        if ($request->hasFile('file')) {

            $file_name = time().'.'.$request->file->getClientOriginalExtension();

            // Uplaod image
            $path= $request->file('file')->move(public_path('/files/'), $file_name);
            $notice->file = $file_name;

        }   

        $notice->title = $request["title"];
        $notice->description = $request["description"];
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::find($id);
        $notices = Notice::get()->where('type','1'); 
        return view('Dashboard.notice',compact('notice','notices')); 
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
        return redirect('/Dashboard/notice/')->with('success', 'Notice Updated');
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
            return back()->with('success', 'Notice Deleted');
        }
    }
}
