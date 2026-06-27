<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Validator;
use App\Models\OurPartner;
class OurPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = OurPartner::orderby('id','Desc')->get();
        return view('admin.our-partners',compact('partners'));
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
            'image'     => 'Required',
            'image'     => 'mimes:jpeg,png,jpg,bmp,gif,svg,webp|max:1048'
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator->errors())->withInput();
        }

        $partner          = new OurPartner();
        $partner->name    = $request->name;
        if ($request->hasFile('image')) {
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     $filename  = 'thumb_'.uniqid() . '_190_105' . '.' . $extension;
        //     $path = public_path('storage/partners/'.$filename);
        //     Image::make($request->file('image')->getRealPath())->resize(190, 105)->save($path);
        //     $partner->image = $filename;
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = uniqid() . 'partners' . '.' . $extension;
            $path = $request->file('image')->storeAs("partners", $fileName, 'public_uploads');
            $partner->image = $path;
        }
        $partner->save();

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
            'image'     => 'Required',
            'image'     => 'mimes:jpeg,png,jpg,bmp,gif,svg,webp|max:1048'
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator->errors())->withInput();
        }

        $partner       =  OurPartner::findOrFail($id);
        $partner->name = $request->name;
        if ($request->hasFile('image')) {
            if (!empty($partner->image)) {
                if (file_exists(public_path() . "/storage/{$partner->image}")) {
                    unlink(public_path() . "/storage/{$partner->image}");
                }
            }
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = uniqid() . 'partners' . '.' . $extension;
            $path = $request->file('image')->storeAs("partners", $fileName, 'public_uploads');
            $partner->image = $path;
        }
        $partner->save();
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
        $partner = OurPartner::findOrFail($id);
        if (!empty($partner->image)) {
                if (file_exists(public_path() . "/storage/{$partner->image}")) {
                    unlink(public_path() . "/storage/{$partner->image}");
                }
        }
        $partner->delete();
        return redirect()->back()->with('message', 'Successfully Deleted');
    }
}
