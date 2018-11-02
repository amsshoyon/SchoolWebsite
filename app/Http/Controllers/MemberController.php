<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Member;
use App\MemberType;
use App\Http\Requests\MemberRequest;

class MemberController extends Controller
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
        $Teachers = Member::get()->where('type','2');
        $Govts = Member::get()->where('type','1');
        $Staffs = Member::get()->where('type','3');
        $type = MemberType::all()->pluck('type', 'id');
        return view('Dashboard.member')->with(compact('Teachers','type','Govts','Staffs'));    
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
    public function store(MemberRequest $request){

        $image_name = time().'.'.$request->image->getClientOriginalExtension();

        // Uplaod image
        $path= $request->file('image')->storeAs('public/images/member/', $image_name);

        // Upload Photo
        $image = new Member;
        $image->name = $request->input('name');
        $image->designation = $request->input('designation');
        $image->type = $request->input('type');
        $image->image = $image_name;

        $image->save();

        return redirect('/Dashboard/Member/')->with('success', 'Member Added');
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
        $Teachers = Member::get()->where('type','1');
        $Govts = Member::get()->where('type','2');
        $Staffs = Member::get()->where('type','3');
        $Member = Member::find($id);
        $type = MemberType::all()->pluck('type', 'id');
        return view('Dashboard.member',compact('Teachers','Member','type','Govts','Staffs'));  
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
        $update=Member::findOrFail($id);

        if ($request->hasFile('image')) {

            Storage::delete('public/images/member/'.$update->image);
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path= $request->file('image')->storeAs('public/images/member/', $image_name);
            $update->image = $image_name;

        }   
        $update->name = $request['name'];
        $update->designation = $request['designation'];
        $update->type = $request['type'];

        $update->save();             
        return redirect('/Dashboard/Member/')->with('success', 'Member Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        $image = Member::find($id);

        if(Storage::delete('public/images/member/'.$image->image)){
            $image->delete();
            return redirect('/Dashboard/Member')->with('success', 'Member Deleted');
        }
    }
    
}
