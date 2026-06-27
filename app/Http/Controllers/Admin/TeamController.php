<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Validator;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderby('id','Desc')->get();
        return view('admin.team',compact('teams'));
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
        $validator = Validator::make($request->all(), [
            'name'     => 'Required',
            'designation' => 'Required',
            'details'     => 'Required',
            'image'     => 'Required',
            'image'     => 'mimes:jpeg,png,jpg,bmp,gif,svg,webp|max:1048'
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator->errors())->withInput();
        }

        $team               = new Team();
        $team->name         = $request->name;
        $team->designation  = $request->designation;
        $team->details      = $request->details;
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename  = uniqid() . '_287_419' . '.' . $extension;
            $path = public_path('storage/team/'.$filename);
            
            // Create image manager instance
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image')->getRealPath());
            $image->resize(287, 419)->save($path);
            
            $team->resized_image = $filename;
        }
        $team->save();

        return redirect()->back()->with('message', 'Added Successfully');
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
        $validator = Validator::make($request->all(), [
            'name'     => 'Required',
            'designation' => 'Required',
            'details'     => 'Required',
            'image'     => 'mimes:jpeg,png,jpg,bmp,gif,svg,webp|max:1048'
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator->errors())->withInput();
        }

        $team               = Team::findOrFail($id);
        $team->name         = $request->name;
        $team->designation  = $request->designation;
        $team->details      = $request->details;
        if ($request->hasFile('image')) {
            if (!empty($partner->image)) {
                if (file_exists(public_path() . "/storage/team/{$partner->image}")) {
                    unlink(public_path() . "/storage/team/{$partner->image}");
                }
            }
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename  = 'team_'.uniqid() . '_287_419' . '.' . $extension;
            $path = public_path('storage/team/'.$filename);
            
            // Create image manager instance
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image')->getRealPath());
            $image->resize(287, 419)->save($path);
            
            $team->resized_image = $filename;
        }
        $team->save();
        return redirect()->back()->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Team::findOrFail($id);
        if (!empty($partner->image)) {
                if (file_exists(public_path() . "/storage/team/{$partner->image}")) {
                    unlink(public_path() . "/storage/team/{$partner->image}");
                }
        }
        $partner->delete();
        return redirect()->back()->with('message', 'Successfully Deleted');
    }
}
