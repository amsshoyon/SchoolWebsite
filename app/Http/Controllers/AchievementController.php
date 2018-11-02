<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Achievement;
use App\Http\Requests\AchievementRequest;

class AchievementController extends Controller
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
        $achievements = Achievement::get();
        return view('dashboard.achievement')->with(compact('achievements'));    
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
    public function store(AchievementRequest $request){

        $image_name = time().'.'.$request->image->getClientOriginalExtension();

        // Uplaod image
        $path= $request->file('image')->move(public_path('/images/achievement'), $image_name);

        // Upload Photo
        $image = new Achievement;
        $image->title = $request->input('title');
        $image->description = $request->input('description');
        $image->date = $request->input('date');
        $image->image = $image_name;

        $image->save();

        return redirect('/Dashboard/Achievement/')->with('success', 'Achievement Uploaded');
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
        $achievement = Achievement::find($id);
        $achievements = Achievement::get();
        return view('Dashboard.achievement',compact('achievements'),compact('achievement'));  
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
        $update=Achievement::findOrFail($id);

        if ($request->hasFile('image')) {

            if(file_exists(public_path('/images/achievement/'.$update->image))){
                File::delete('/images/message/'.$update->image);
            }
            
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path= $request->file('image')->move(public_path('/images/achievement'), $image_name);
            $update->image = $image_name;

        }   
        $update->title = $request['title'];
        $update->description = $request['description'];
        $update->date = $request['date'];

        $update->save();             
        return redirect('/Dashboard/Achievement/')->with('success', 'Achievement Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        $delete = Achievement::find($id);

        if(unlink(public_path('/images/achievement/'.$delete->image))){
            $delete->delete();
            return back()->with('success', 'Deleted');
        }
    }
    
}
