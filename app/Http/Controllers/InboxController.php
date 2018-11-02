<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inbox;
use App\Http\Requests\InboxRequest;
use Session;
use Response;

class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $query = Inbox::where('type', 0);
        $users = $query->latest()->get();

        return view('dashboard.inbox')->with(compact('users'));  
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
        $store = new Inbox;
        $store->name = $request->input('name');
        $store->email = $request->input('email');
        $store->subject = $request->input('subject');
        $store->message = $request->input('message');

        $store->save();
        session()->flash('success', 'message has been sent');
        return response()->json(['msg'=>'success'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $update=Inbox::findOrFail($id);
        $update->view = '1';
        $update->save();  

        $view = Inbox::find($id);
        return view('dashboard.ViewMsg',compact('view')); 
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Inbox::find($id);

        $delete->delete();
        return back()->with('success', 'Message Deleted');
    }
}
