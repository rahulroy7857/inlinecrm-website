<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Validator;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::where('status', 1)->orderBy('id','Desc')->get();
        return view('admin.courses.courses', compact('courses'));
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
            'type'       => 'required',
            'department_id'=> 'required',
            'name'       => 'required',
            'full_name'  => 'required',
            'eligibility'=> 'required',
            'duration'   => 'required',
            'image'      => 'max:524'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }
        $course              = new Course();
        $course->department_id = $request->department_id;
        $course->type        = $request->type;
        $course->name        = $request->name;
        $course->full_name   = $request->full_name;
        $course->order       = $request->order;
        $course->slug        =  $this->createSlug($request->name);        
        if ($request->hasFile('image')) {              
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = uniqid() . 'courses' . '.' . $extension;
            $path = $request->file('image')->storeAs("courses", $fileName, 'public_uploads');
            $course->logo = $path;
        }
        $course->eligibility = $request->eligibility;
        $course->duration    = $request->duration;
        $course->university  = $request->university;
        $course->save();
        return redirect()->back()->with('message', 'Course Added successfully');
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
            'type'       => 'required',
            'name'       => 'required',
            'full_name'  => 'required',
            'eligibility'=> 'required',
            'duration'   => 'required',
            'image'      => 'max:524'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }
        $course              = Course::findOrFail($id);
        $course->name        = $request->name;
        $course->type        = $request->type;
        $course->full_name   = $request->full_name;
        $course->order       = $request->order;
        $course->slug        =  $this->createSlug($request->name, $id);
        if ($request->hasFile('image')) { 
            if (!empty($course->logo)) {
                if (file_exists(public_path() . "/storage/{$course->logo}")) {
                    unlink(public_path() . "/storage/{$course->logo}");
                }
            }             
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = uniqid() . 'courses' . '.' . $extension;
            $path = $request->file('image')->storeAs("courses", $fileName, 'public_uploads');
            $course->logo = $path;
        }
        $course->eligibility = $request->eligibility;
        $course->duration    = $request->duration;
        $course->university  = $request->university;
        $course->save();
        return redirect()->back()->with('message', 'Course Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
        return Course::select('slug')->where('slug', 'like', $slug.'%')
                ->where('id', '<>', $id)
                ->get();
    }
}
