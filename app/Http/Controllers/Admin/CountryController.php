<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use App\Models\Country;
use Validator;
use Auth;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('id','Desc')->get();
        return view('admin.abroad.countries', compact('countries'));
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
            'name'  => 'required',
            'image.*'=> 'max:1048'
        ]);
        if ($validator->fails()) {
            return back()
                ->with('error', 'Images above 1MB is not allowed.');
        }
        $country           = new Country();
        $country->name     = $request->name;
        $country->meta_title= $request->meta_title;
        $country->meta     = $request->meta;
        $country->overview = $request->overview;
        $country->slug     =  $this->createSlug($request->name);        
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = uniqid() . 'countries' . '.' . $extension;
            $path = $request->file('image')->storeAs("countries", $fileName, 'public_uploads');
            $country->image = $path;
        }
        $country->save();
        return redirect()->back()->with('message', 'Country Added successfully');
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
            'name'  => 'required',
            'image.*'=> 'max:1048'
        ]);
        if ($validator->fails()) {
            return back()
                ->with('error', 'Images above 1MB is not allowed.');
        }
        $country           = Country::findOrFail($id);
        $country->name     = $request->name;
        $country->meta_title= $request->meta_title;
        $country->meta     = $request->meta;
        $country->overview = $request->overview;
        // $country->slug     =  $this->createSlug($request->name);        
        if ($request->hasFile('image')) {
            if (!empty($blogs->image)) {
                if (file_exists(public_path() . "/storage/{$blogs->image}")) {
                    unlink(public_path() . "/storage/{$blogs->image}");
                }
            }
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = uniqid() . 'countries' . '.' . $extension;
            $path = $request->file('image')->storeAs("countries", $fileName, 'public_uploads');
            $country->image = $path;
        }
        $country->save();
        return redirect()->back()->with('message', 'Country Added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        if (!empty($blogs->image)) {
            if (file_exists(public_path() . "/storage/{$blogs->image}")) {
                unlink(public_path() . "/storage/{$blogs->image}");
            }
        }
        $country->delete();
        return redirect()->back()->with('message', 'Country Deleted successfully');
    }

    public function createSlug($title, $id = 0)
    {
        // Normalize the title
        // $slug = str_slug($title);
        $slug = Str::slug($title);
        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        // If we haven't used it before then we are all good.
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }
        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }
        throw new \Exception('Can not create a unique slug');
    }
    
    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Country::select('slug')->where('slug', 'like', $slug.'%')
                ->where('id', '<>', $id)
                ->get();
    }
}
