<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use App\Models\CollegeCourse;
use App\Models\College;
use App\Models\Course;
use App\Models\CollegeFaq;
use App\Models\CollegeExam;
use App\Models\CollegeNotification;
use App\Models\Review;
use Validator;
use Auth;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges = College::orderBy('id','Desc')->get();
        return view('admin.colleges.index', compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.colleges.create');
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
            'name'      => 'required',
            // 'slider_text'=> 'required',
            'about'     => 'required',
            'overview'  => 'required',
            'image'     => 'required|max:1048',
            'logo'      => 'required|max:1048'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        if(!empty($request->facilities2) && $request->facilities2 != ''){
            $facilities = json_encode($request->facilities2);
        }
        
        $check = College::where('name', $request->name)->count();
        if($check> 0){
            return redirect('/admin/colleges')->with('error', 'College name already exist');
        }

        $college               = new College();
        $college->name         = $request->name;
        $college->slug         =  $this->createSlug($request->name); 
        $college->meta_title   = $request->meta_title;
        $college->meta         = $request->meta;
        $college->slider_text  = $request->slider_text;
        $college->about        = $request->about;
        $college->overview     = $request->overview;
        $college->facilities   = $request->facilities;
        $college->type         = $request->type;
        $college->affiliation  = $request->affiliation;
        $college->established  = $request->established;
        $college->location     = $request->location;
        $college->specializations = $request->specializations;
        $college->fees = $request->fees;
        $college->placements = $request->placements;
        if(!empty($request->facilities2) && $request->facilities2 != ''){
        $college->facilities2  = $facilities;
        }  
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename  = uniqid() . '_310_92' . '.' . $extension;
            $path = public_path('storage/colleges/'.$filename);
            
            // Create image manager instance
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image')->getRealPath());
            $image->resize(310, 92)->save($path);
            
            $college->resized_image = $filename;
                      
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = uniqid() . 'colleges' . '.' . $extension;
            $path = $request->file('image')->storeAs("colleges", $fileName, 'public_uploads');
            $college->image = $path;
        }
        if ($request->hasFile('logo')) {
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileName = uniqid() . 'logo' . '.' . $extension;
            $path = $request->file('logo')->storeAs("colleges", $fileName, 'public_uploads');
            $college->logo = $path;
        }
        if ($request->hasFile('image1')) {
            $extension = $request->file('image1')->getClientOriginalExtension();
            $fileName = uniqid() . 'image1' . '.' . $extension;
            $path = $request->file('image1')->storeAs("colleges", $fileName, 'public_uploads');
            $college->side_image1 = $path;
        }
        if ($request->hasFile('image2')) {
            $extension = $request->file('image2')->getClientOriginalExtension();
            $fileName = uniqid() . 'image2' . '.' . $extension;
            $path = $request->file('image2')->storeAs("colleges", $fileName, 'public_uploads');
            $college->side_image2 = $path;
        }
        if ($request->hasFile('image3')) {
            $extension = $request->file('image3')->getClientOriginalExtension();
            $fileName = uniqid() . 'image3' . '.' . $extension;
            $path = $request->file('image3')->storeAs("colleges", $fileName, 'public_uploads');
            $college->side_image3 = $path;
        }
        if ($request->hasFile('image4')) {
            $extension = $request->file('image4')->getClientOriginalExtension();
            $fileName = uniqid() . 'image4' . '.' . $extension;
            $path = $request->file('image4')->storeAs("colleges", $fileName, 'public_uploads');
            $college->side_image4 = $path;
        }
        if ($request->hasFile('campus_photos')) {
            foreach($request->file('campus_photos') as $file){
               $filename  = $file->getClientOriginalName();
               $path = public_path('storage/campus/'.$filename);
               
               // Create image manager instance
               $manager = new ImageManager(new Driver());
               $image = $manager->read($file->getRealPath());
               $image->resize(250, 200)->save($path);
               
               $data[] = $filename;
           }
           $college->campus_images = json_encode($data);
        }
        $college->youtube_id   = $request->youtube_id;
        $college->save();
        return redirect('/admin/colleges')->with('message', 'College Added successfully');
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
        $college = College::where('id', $id)->first();
        $facilities = array();
        if($college->facilities2 != ''){
            $facilities = json_decode($college->facilities2);
        }
        return view('admin.colleges.edit', compact('college', 'facilities'));
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
            'name'      => 'required',
            // 'slider_text'=> 'required',
            'about'     => 'required',
            'overview'  => 'required',
            'image'     => 'max:1048',
            'logo'      => 'max:1048'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        if(!empty($request->facilities2) && $request->facilities2 != ''){
            $facilities = json_encode($request->facilities2);
        }

        $college               = College::findOrFail($id);
        $college->name         = $request->name;
        $college->slug         = $this->createSlug($request->name, $id);
        $college->meta_title   = $request->meta_title;
        $college->meta         = $request->meta;
        $college->slider_text  = $request->slider_text;
        $college->about        = $request->about;
        $college->overview     = $request->overview;
        $college->facilities   = $request->facilities;
        $college->type         = $request->type;
        $college->affiliation  = $request->affiliation;
        $college->established  = $request->established;
        $college->location     = $request->location;
        $college->specializations = $request->specializations;
        $college->fees = $request->fees;
        $college->placements = $request->placements;
        if(!empty($request->facilities2) && $request->facilities2 != ''){
        $college->facilities2  = $facilities;
        } else {
        $college->facilities2  = NULL;
        }              
        if ($request->hasFile('image')) {
            if (!empty($college->image)) {
                if (file_exists(public_path() . "/storage/{$college->image}")) {
                    unlink(public_path() . "/storage/{$college->image}");
                }
            }
            if (!empty($college->resized_image)) {
                if (file_exists(public_path() . "/storage/colleges/{$college->resized_image}")) {
                    unlink(public_path() . "/storage/colleges/{$college->resized_image}");
                }
            }
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename  = uniqid() . '_310_92' . '.' . $extension;
            $path = public_path('storage/colleges/'.$filename);
            
            // Create image manager instance
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image')->getRealPath());
            $image->resize(310, 92)->save($path);
            
            $college->resized_image = $filename;
                      
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = uniqid() . 'colleges' . '.' . $extension;
            $path = $request->file('image')->storeAs("colleges", $fileName, 'public_uploads');
            $college->image = $path;
        }
        if ($request->hasFile('logo')) {
            if (!empty($college->logo)) {
                if (file_exists(public_path() . "/storage/{$college->logo}")) {
                    unlink(public_path() . "/storage/{$college->logo}");
                }
            }
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileName = uniqid() . 'logo' . '.' . $extension;
            $path = $request->file('logo')->storeAs("colleges", $fileName, 'public_uploads');
            $college->logo = $path;
        }
        if ($request->hasFile('image1')) {
            if (!empty($college->image1)) {
                if (file_exists(public_path() . "/storage/{$college->image1}")) {
                    unlink(public_path() . "/storage/{$college->image1}");
                }
            }
            $extension = $request->file('image1')->getClientOriginalExtension();
            $fileName = uniqid() . 'image1' . '.' . $extension;
            $path = $request->file('image1')->storeAs("colleges", $fileName, 'public_uploads');
            $college->side_image1 = $path;
        }
        if ($request->hasFile('image2')) {
            if (!empty($college->image2)) {
                if (file_exists(public_path() . "/storage/{$college->image2}")) {
                    unlink(public_path() . "/storage/{$college->image2}");
                }
            }
            $extension = $request->file('image2')->getClientOriginalExtension();
            $fileName = uniqid() . 'image2' . '.' . $extension;
            $path = $request->file('image2')->storeAs("colleges", $fileName, 'public_uploads');
            $college->side_image2 = $path;
        }
        if ($request->hasFile('image3')) {
            if (!empty($college->image3)) {
                if (file_exists(public_path() . "/storage/{$college->image3}")) {
                    unlink(public_path() . "/storage/{$college->image3}");
                }
            }
            $extension = $request->file('image3')->getClientOriginalExtension();
            $fileName = uniqid() . 'image3' . '.' . $extension;
            $path = $request->file('image3')->storeAs("colleges", $fileName, 'public_uploads');
            $college->side_image3 = $path;
        }
        if ($request->hasFile('image4')) {
            if (!empty($college->image4)) {
                if (file_exists(public_path() . "/storage/{$college->image4}")) {
                    unlink(public_path() . "/storage/{$college->image4}");
                }
            }
            $extension = $request->file('image4')->getClientOriginalExtension();
            $fileName = uniqid() . 'image4' . '.' . $extension;
            $path = $request->file('image4')->storeAs("colleges", $fileName, 'public_uploads');
            $college->side_image4 = $path;
        }
        if ($request->hasFile('campus_photos')) {
            if (!empty($college->campus_images)) {
                foreach(json_decode($college->campus_images) as $cimage){
                    if (file_exists(public_path() . "/storage/campus/{$cimage}")) {
                        unlink(public_path() . "/storage/campus/{$cimage}");
                    }
                }
            }
            foreach($request->file('campus_photos') as $file){
               $filename  = $file->getClientOriginalName();
               $path = public_path('storage/campus/'.$filename);
               
               // Create image manager instance
               $manager = new ImageManager(new Driver());
               $image = $manager->read($file->getRealPath());
               $image->resize(416, 184)->save($path);
               
               $data[] = $filename;
           }
           $college->campus_images = json_encode($data);
        }
        $college->youtube_id   = $request->youtube_id;
        $college->save();
        return redirect('/admin/colleges')->with('message', 'College updated successfully');
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
        return College::select('slug')->where('slug', 'like', $slug.'%')
                ->where('id', '<>', $id)
                ->get();
    }

    public function collegeCourses($id)
    {
        $college = College::where('id', $id)->first();
        $collegeId = $id;
        $courses = Course::orderBy('name', 'asc')->get();
        $programs = CollegeCourse::where('college_id', $id)->get();
        return view('admin.colleges.courses.index', compact('college', 'collegeId', 'courses', 'programs'));
    }

    public function addCollegeCourses(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'college_id'    => 'required',
            'course'        => 'required',
            'seat'          => 'required',
            'mode'          => 'required',
            'fee'           => 'required',
            'exams'         => 'required',
            'duration'      => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }
        $course = Course::where('id', $request->course)->first();
        $type = $course->type;
        $department = $course->department_id;

        $check = CollegeCourse::where('college_id', $request->college_id)
                    ->where('course_id', $request->course)
                    ->count();
        if($check > 0){
            return redirect('/admin/colleges/courses/'.$request->college_id)->with('error', 'Course already exist');
        }

        $college                = new CollegeCourse();
        $college->college_id    = $request->college_id;
        $college->course_id     = $request->course;
        $college->department_id = $department;
        $college->course_name   = $request->name;
        $college->type          = $type;
        $college->fee           = $request->fee;
        $college->mode          = $request->mode;
        $college->seat          = $request->seat;
        $college->exams         = $request->exams;
        $college->eligibility   = $request->eligibility;
        $college->duration      = $request->duration;
        $college->affiliation   = $request->affiliation;
        $college->status        = $request->popular_course;
        $college->save();
        return redirect('/admin/colleges/courses/'.$request->college_id)->with('message', 'Course added successfully');
    }

    public function updateCollegeCourses(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'course'        => 'required',
            'seat'          => 'required',
            'mode'          => 'required',
            'fee'           => 'required',
            'exams'         => 'required',
            'duration'      => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }
        $course = Course::where('id', $request->course)->first();
        $type = $course->type;
        $department = $course->department_id;

        $check = CollegeCourse::where('college_id', $request->college_id)
                    ->where('course_id', $request->course)
                    ->where('id', '!=', $id)
                    ->count();
        if($check > 0){
            return redirect('/admin/colleges/courses/'.$request->college_id)->with('error', 'Course already exist');
        }

        $college                = CollegeCourse::findOrFail($id);
        $college->course_id     = $request->course;
        $college->department_id = $department;
        $college->course_name   = $request->name;
        $college->type          = $type;
        $college->fee           = $request->fee;
        $college->mode          = $request->mode;
        $college->seat          = $request->seat;
        $college->exams         = $request->exams;
        $college->eligibility   = $request->eligibility;
        $college->duration      = $request->duration;
        $college->affiliation   = $request->affiliation;
        $college->status        = $request->popular_course;
        $college->save();
        return redirect('/admin/colleges/courses/'.$college->college_id)->with('message', 'Course updated successfully');
    }

    public function deleteCollegeCourses($id)
    {
        $course = CollegeCourse::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Course deleted successfully');
    }

    public function collegeFaq($id)
    {
        $college = College::where('id', $id)->first();
        $collegeId = $id;
        $faqs = CollegeFaq::where('college_id', $id)->get();
        return view('admin.colleges.faq.index', compact('college', 'collegeId', 'faqs'));
    }

    public function addCollegeFaq(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'college_id'      => 'required',
            'question'        => 'required',
            'answer'          => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $college               = new CollegeFaq();
        $college->college_id   = $request->college_id;
        $college->question     = $request->question;
        $college->answer       = $request->answer;
        $college->save();
        return redirect('/admin/colleges/faqs/'.$request->college_id)->with('message', 'Faq added successfully');
    }

    public function updateCollegeFaq(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'question'        => 'required',
            'answer'          => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $college               = CollegeFaq::findOrFail($id);
        $college->question     = $request->question;
        $college->answer       = $request->answer;
        $college->save();
        return redirect('/admin/colleges/faqs/'.$college->college_id)->with('message', 'Faq updated successfully');
    }

    public function deleteCollegeFaq($id)
    {
        $course = CollegeFaq::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Faq deleted successfully');
    }

    public function collegeExam($id)
    {
        $college = College::where('id', $id)->first();
        $collegeId = $id;
        $exams = CollegeExam::where('college_id', $id)->get();
        return view('admin.colleges.exams.index', compact('college', 'collegeId', 'exams'));
    }

    public function addCollegeExam(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'college_id'  => 'required',
            'name'        => 'required',
            'full_name'   => 'required',
            'start_date'  => 'required',
            'end_date'    => 'required',
            'mode'        => 'required',
            'details'     => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $college               = new CollegeExam();
        $college->college_id   = $request->college_id;
        $college->exam         = $request->name;
        $college->full_name    = $request->full_name;
        $college->start_date   = date('Y-m-d', strtotime($request->start_date));
        $college->end_date     = date('Y-m-d', strtotime($request->end_date));
        $college->mode         = $request->mode;
        $college->details      = $request->details;
        $college->save();
        return redirect('/admin/colleges/exams/'.$request->college_id)->with('message', 'Eaxm added successfully');
    }

    public function updateCollegeExam(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'        => 'required',
            'full_name'   => 'required',
            'start_date'  => 'required',
            'end_date'    => 'required',
            'mode'        => 'required',
            'details'     => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $college               = CollegeExam::findOrFail($id);
        $college->exam         = $request->name;
        $college->full_name    = $request->full_name;
        $college->start_date   = date('Y-m-d', strtotime($request->start_date));
        $college->end_date     = date('Y-m-d', strtotime($request->end_date));
        $college->mode         = $request->mode;
        $college->details      = $request->details;
        $college->save();
        return redirect('/admin/colleges/exams/'.$college->college_id)->with('message', 'Exam updated successfully');
    }

    public function deleteCollegeExam($id)
    {
        $course = CollegeExam::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Exam deleted successfully');
    }

    public function collegeReviews($id)
    {
        $college = College::where('id', $id)->first();
        $collegeId = $id;
        $reviews = Review::where('type', 1)->where('type_id', $id)->get();
        return view('admin.colleges.reviews', compact('college', 'collegeId', 'reviews'));
    }

    public function deleteCollegeReview($id)
    {
        $course = Review::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Deleted successfully');
    }
    
    public function collegeNotification($id)
    {
        $college = College::where('id', $id)->first();
        $collegeId = $id;
        $exams = CollegeNotification::where('college_id', $id)->get();
        return view('admin.colleges.notifications', compact('college', 'collegeId', 'exams'));
    }

    public function addCollegeNotification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'college_id'  => 'required',
            'name'        => 'required',
            'details'     => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $college               = new CollegeNotification();
        $college->college_id   = $request->college_id;
        $college->name         = $request->name;
        $college->slug         =  $this->createNotificationSlug($request->name); 
        $college->meta_title   = $request->meta_title;
        $college->meta         = $request->meta;
        $college->details      = $request->details;
        $college->save();
        return redirect('/admin/colleges/notifications/'.$request->college_id)->with('message', 'Added successfully');
    }

    public function updateCollegeNotification(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'        => 'required',
            'details'     => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $college               = CollegeNotification::findOrFail($id);
        $college->name         = $request->name;
        $college->slug         = $this->createNotificationSlug($request->name, $id);
        $college->meta_title   = $request->meta_title;
        $college->meta         = $request->meta;
        $college->details      = $request->details;
        $college->save();
        return redirect('/admin/colleges/notifications/'.$college->college_id)->with('message', 'Updated successfully');
    }

    public function deleteCollegeNotification($id)
    {
        $course = CollegeNotification::findOrFail($id);
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
        return CollegeNotification::select('slug')->where('slug', 'like', $slug.'%')
                ->where('id', '<>', $id)
                ->get();
    }
    
}
