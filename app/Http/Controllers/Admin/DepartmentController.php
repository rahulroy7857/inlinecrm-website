<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departments;
use App\Models\DepartmentNotification;
use App\Models\Course;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Validator;

class DepartmentController extends Controller
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
        $departments = Departments::where('status', 1)->orderBy('name','asc')->get();
        return view('admin.courses.departments', compact('departments'));
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
            'image' => 'required|max:1048'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }
        $dep           = new Departments();
        $dep->name     = $request->name;
        $dep->slug     =  $this->createSlug($request->name); 
        $dep->details  = $request->details;
        $dep->position = $request->order;
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename  = uniqid() . '_397_248' . '.' . $extension;
            $path = public_path('storage/departments/'.$filename);
            
            // Create image manager instance
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image')->getRealPath());
            $image->resize(397, 248)->save($path);
            
            $dep->image = $filename;
        }
        $dep->save();
        return redirect()->back()->with('message', 'Department Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Departments::where('id', $id)->first();
        $courses = Course::where('department_id', $id)->orderBy('id','Desc')->get();
        $departmentId = $id;
        return view('admin.courses.courses', compact('courses', 'department', 'departmentId'));
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
            'image' => 'max:1048'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }
        $dep           = Departments::findOrFail($id);
        $dep->name     = $request->name;
        $dep->slug     =  $this->createSlug($request->name, $id);
        $dep->details  = $request->details;
        $dep->position = $request->order;
        if ($request->hasFile('image')) {
            if (!empty($news->resized_image)) {
                if (file_exists(public_path() . "/storage/departments/{$news->resized_image}")) {
                    unlink(public_path() . "/storage/departments/{$news->resized_image}");
                }
            }
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename  = uniqid() . '_397_248' . '.' . $extension;
            $path = public_path('storage/departments/'.$filename);
            
            // Create image manager instance
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image')->getRealPath());
            $image->resize(397, 248)->save($path);
            
            $dep->image = $filename;
        }
        $dep->save();
        return redirect()->back()->with('message', 'Department Updated successfully');
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
        return Departments::select('slug')->where('slug', 'like', $slug.'%')
                ->where('id', '<>', $id)
                ->get();
    }
    
    public function departmentNotification($id)
    {
        $college = Departments::where('id', $id)->first();
        $collegeId = $id;
        $exams = DepartmentNotification::where('department_id', $id)->get();
        return view('admin.courses.notifications', compact('college', 'collegeId', 'exams'));
    }

    public function addDepartmentNotification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'college_id'  => 'required',
            'name'        => 'required',
            'details'     => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $college               = new DepartmentNotification();
        $college->department_id= $request->college_id;
        $college->name         = $request->name;
        $college->slug         =  $this->createNotificationSlug($request->name); 
        $college->meta_title   = $request->meta_title;
        $college->meta         = $request->meta;
        $college->details      = $request->details;
        $college->save();
        return redirect('/admin/departments/notifications/'.$request->college_id)->with('message', 'Added successfully');
    }

    public function updateDepartmentNotification(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'        => 'required',
            'details'     => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $college               = DepartmentNotification::findOrFail($id);
        $college->name         = $request->name;
        $college->slug         = $this->createNotificationSlug($request->name, $id);
        $college->meta_title   = $request->meta_title;
        $college->meta         = $request->meta;
        $college->details      = $request->details;
        $college->save();
        return redirect('/admin/departments/notifications/'.$college->department_id)->with('message', 'Updated successfully');
    }

    public function deleteDepartmentNotification($id)
    {
        $course = DepartmentNotification::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Deleted successfully');
    }


    public function createNotificationSlug($title, $id = 0)
    {
        // Normalize the title
        // $slug = str_slug($title);
        $slug = Str::slug($title);
        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getNotificationRelatedSlugs($slug, $id);
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
    
    protected function getNotificationRelatedSlugs($slug, $id = 0)
    {
        return DepartmentNotification::select('slug')->where('slug', 'like', $slug.'%')
                ->where('id', '<>', $id)
                ->get();
    }
}
