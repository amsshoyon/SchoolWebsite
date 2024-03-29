<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Website;
use App\Http\Requests\WebsiteRequest;

class WebsiteController extends Controller
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
        $website = Website::get()->first();
        return view('Dashboard.website')->with(compact('website'));
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
    public function store(SliderRequest $request){
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
        $update=Website::findOrFail($id);

        if ($request->hasFile('image')) {

            if(file_exists(public_path('/images/website/'.$update->image))){
                File::delete('/images/website/'.$update->image);
            }
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path= $request->file('image')->move(public_path('/images/website'), $image_name);
            $update->logo = $image_name;

        }
        $update->name = $request['name'];
        $update->email = $request['email'];
        $update->phone = $request['phone'];
        $update->address = $request['address'];
        $update->map = $request['map'];

        $update->save();
        return redirect('/Dashboard/website/')->with('success', 'Image Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }

}
