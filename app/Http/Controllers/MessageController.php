<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MessageRequest;
use App\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = Message::find('1');
        return view('Dashboard.messages', compact('message'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::find($id);
        return view('Dashboard.messages', compact('message'));
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
        $messages = Message::find($id);

        if ($request->hasFile('image')) {

            Storage::delete('public/images/message/'.$messages->image);
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path= $request->file('image')->storeAs('public/images/message/', $image_name);
            $messages->image = $image_name;

        }   
        
        $messages->name = $request["name"];
        $messages->designation = $request["designation"];
        $messages->message = $request["message"];
        $messages->save();
        return back()->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $messages = Message::find($id);
        $messages->delete();
        return back();
    }
}
