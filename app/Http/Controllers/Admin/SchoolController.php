<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use App\Models\SchoolClasse;
use App\Models\School;
use App\Models\Classe;
use App\Models\SchoolFAQ;
use App\Models\State;
use App\Models\Review;
use App\Models\SchoolNotification;
use Validator;
use Auth;
class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges = School::orderBy('id','Desc')->get();
        return view('admin.schools.index', compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::orderby('name', 'asc')->get();
        return view('admin.schools.create', compact('states'));
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
            'state'     => 'required',
            'slider_text'=> 'required',
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

        $school               = new School();
        $school->name         = $request->name;
        $school->slug         =  $this->createSlug($request->name); 
        $school->meta_title   = $request->meta_title;
        $school->meta         = $request->meta;
        $school->state_id     = $request->state; 
        $school->board        = $request->board;
        $school->slider_text  = $request->slider_text;
        $school->about        = $request->about;
        $school->overview     = $request->overview;
        $school->facilities   = $request->facilities;
        $school->established  = $request->established;
        $school->location     = $request->location;
        if(!empty($request->facilities2) && $request->facilities2 != ''){
        $school->facilities2  = $facilities;
        }  
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename  = uniqid() . '_288_292' . '.' . $extension;
            $path = public_path('storage/schools/'.$filename);
            
            // Create image manager instance
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image')->getRealPath());
            $image->resize(288, 292)->save($path);
            
            $school->resized_image = $filename;
                      
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = uniqid() . 'schools' . '.' . $extension;
            $path = $request->file('image')->storeAs("schools", $fileName, 'public_uploads');
            $school->image = $path;
        }
        if ($request->hasFile('logo')) {
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileName = uniqid() . 'logo' . '.' . $extension;
            $path = $request->file('logo')->storeAs("schools", $fileName, 'public_uploads');
            $school->logo = $path;
        }
        if ($request->hasFile('image1')) {
            $extension = $request->file('image1')->getClientOriginalExtension();
            $fileName = uniqid() . 'image1' . '.' . $extension;
            $path = $request->file('image1')->storeAs("schools", $fileName, 'public_uploads');
            $school->side_image1 = $path;
        }
        if ($request->hasFile('image2')) {
            $extension = $request->file('image2')->getClientOriginalExtension();
            $fileName = uniqid() . 'image2' . '.' . $extension;
            $path = $request->file('image2')->storeAs("schools", $fileName, 'public_uploads');
            $school->side_image2 = $path;
        }
        if ($request->hasFile('image3')) {
            $extension = $request->file('image3')->getClientOriginalExtension();
            $fileName = uniqid() . 'image3' . '.' . $extension;
            $path = $request->file('image3')->storeAs("schools", $fileName, 'public_uploads');
            $school->side_image3 = $path;
        }
        if ($request->hasFile('image4')) {
            $extension = $request->file('image4')->getClientOriginalExtension();
            $fileName = uniqid() . 'image4' . '.' . $extension;
            $path = $request->file('image4')->storeAs("schools", $fileName, 'public_uploads');
            $school->side_image4 = $path;
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
           $school->campus_images = json_encode($data);
        }
        $school->youtube_id   = $request->youtube_id;
        $school->save();
        return redirect('/admin/schools')->with('message', 'College Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $college = School::where('id', $id)->first();
        $facilities = array();
        if($college->facilities2 != ''){
            $facilities = json_decode($college->facilities2);
        }
        $states = State::orderby('name', 'asc')->get();
        return view('admin.schools.edit', compact('college', 'facilities', 'states'));
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
            'state'     => 'required',
            'name'      => 'required',
            'slider_text'=> 'required',
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

        $school               = School::findOrFail($id);
        $school->name         = $request->name;
        $school->slug         = $this->createSlug($request->name, $id);
        $school->meta_title   = $request->meta_title;
        $school->meta         = $request->meta;
        $school->state_id     = $request->state; 
        $school->board        = $request->board;
        $school->slider_text  = $request->slider_text;
        $school->about        = $request->about;
        $school->overview     = $request->overview;
        $school->facilities   = $request->facilities;
        $school->established  = $request->established;
        $school->location     = $request->location;
        if(!empty($request->facilities2) && $request->facilities2 != ''){
        $school->facilities2  = $facilities;
        } else {
        $school->facilities2  = NULL;
        }              
        if ($request->hasFile('image')) {
            if (!empty($school->image)) {
                if (file_exists(public_path() . "/storage/{$school->image}")) {
                    unlink(public_path() . "/storage/{$school->image}");
                }
            }
            if (!empty($school->resized_image)) {
                if (file_exists(public_path() . "/storage/schools/{$school->resized_image}")) {
                    unlink(public_path() . "/storage/schools/{$school->resized_image}");
                }
            }
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename  = uniqid() . '_288_292' . '.' . $extension;
            $path = public_path('storage/schools/'.$filename);
            
            // Create image manager instance
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image')->getRealPath());
            $image->resize(288, 292)->save($path);
            
            $school->resized_image = $filename;
                      
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = uniqid() . 'schools' . '.' . $extension;
            $path = $request->file('image')->storeAs("schools", $fileName, 'public_uploads');
            $school->image = $path;
        }
        if ($request->hasFile('logo')) {
            if (!empty($school->logo)) {
                if (file_exists(public_path() . "/storage/{$school->logo}")) {
                    unlink(public_path() . "/storage/{$school->logo}");
                }
            }
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileName = uniqid() . 'logo' . '.' . $extension;
            $path = $request->file('logo')->storeAs("schools", $fileName, 'public_uploads');
            $school->logo = $path;
        }
        if ($request->hasFile('image1')) {
            if (!empty($school->image1)) {
                if (file_exists(public_path() . "/storage/{$school->image1}")) {
                    unlink(public_path() . "/storage/{$school->image1}");
                }
            }
            $extension = $request->file('image1')->getClientOriginalExtension();
            $fileName = uniqid() . 'image1' . '.' . $extension;
            $path = $request->file('image1')->storeAs("schools", $fileName, 'public_uploads');
            $school->side_image1 = $path;
        }
        if ($request->hasFile('image2')) {
            if (!empty($school->image2)) {
                if (file_exists(public_path() . "/storage/{$school->image2}")) {
                    unlink(public_path() . "/storage/{$school->image2}");
                }
            }
            $extension = $request->file('image2')->getClientOriginalExtension();
            $fileName = uniqid() . 'image2' . '.' . $extension;
            $path = $request->file('image2')->storeAs("schools", $fileName, 'public_uploads');
            $school->side_image2 = $path;
        }
        if ($request->hasFile('image3')) {
            if (!empty($school->image3)) {
                if (file_exists(public_path() . "/storage/{$school->image3}")) {
                    unlink(public_path() . "/storage/{$school->image3}");
                }
            }
            $extension = $request->file('image3')->getClientOriginalExtension();
            $fileName = uniqid() . 'image3' . '.' . $extension;
            $path = $request->file('image3')->storeAs("schools", $fileName, 'public_uploads');
            $school->side_image3 = $path;
        }
        if ($request->hasFile('image4')) {
            if (!empty($school->image4)) {
                if (file_exists(public_path() . "/storage/{$school->image4}")) {
                    unlink(public_path() . "/storage/{$school->image4}");
                }
            }
            $extension = $request->file('image4')->getClientOriginalExtension();
            $fileName = uniqid() . 'image4' . '.' . $extension;
            $path = $request->file('image4')->storeAs("schools", $fileName, 'public_uploads');
            $school->side_image4 = $path;
        }
        if ($request->hasFile('campus_photos')) {
            if (!empty($school->campus_images)) {
                foreach(json_decode($school->campus_images) as $cimage){
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
               $image->resize(250, 200)->save($path);
               
               $data[] = $filename;
           }
           $school->campus_images = json_encode($data);
        }
        $school->youtube_id   = $request->youtube_id;
        $school->save();
        return redirect('/admin/schools')->with('message', 'College updated successfully');
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
        return School::select('slug')->where('slug', 'like', $slug.'%')
                ->where('id', '<>', $id)
                ->get();
    }


    public function schoolFaq($id)
    {
        $college = School::where('id', $id)->first();
        $collegeId = $id;
        $faqs = SchoolFAQ::where('school_id', $id)->get();
        return view('admin.schools.faq.index', compact('college', 'collegeId', 'faqs'));
    }

    public function addSchoolFaq(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'school_id'      => 'required',
            'question'        => 'required',
            'answer'          => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $college               = new SchoolFAQ();
        $college->school_id    = $request->school_id;
        $college->question     = $request->question;
        $college->answer       = $request->answer;
        $college->save();
        return redirect('/admin/schools/faqs/'.$request->school_id)->with('message', 'Faq added successfully');
    }

    public function updateSchoolFaq(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'question'        => 'required',
            'answer'          => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $college               = SchoolFAQ::findOrFail($id);
        $college->question     = $request->question;
        $college->answer       = $request->answer;
        $college->save();
        return redirect('/admin/schools/faqs/'.$college->school_id)->with('message', 'Faq updated successfully');
    }

    public function deleteSchoolFaq($id)
    {
        $course = SchoolFAQ::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Faq deleted successfully');
    }

    public function schoolCourses($id)
    {
        $college = School::where('id', $id)->first();
        $collegeId = $id;
        $courses = Classe::orderBy('name', 'asc')->get();
        $programs = SchoolClasse::where('school_id', $id)->get();
        return view('admin.schools.courses.index', compact('college', 'collegeId', 'courses', 'programs'));
    }

    public function addSchoolCourses(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'school_id'    => 'required',
            'course'        => 'required',
            'seat'          => 'required',
            'fee'           => 'required',
            'duration'      => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }
        
        $check = SchoolClasse::where('school_id', $request->school_id)
                    ->where('class_id', $request->course)
                    ->count();
        if($check > 0){
            return redirect('/admin/schools/courses/'.$request->school_id)->with('error', 'Course already exist');
        }

        $college                = new SchoolClasse();
        $college->school_id     = $request->school_id;
        $college->class_id      = $request->course;
        $college->course_name   = $request->name;
        $college->fee           = $request->fee;
        $college->seat          = $request->seat;
        $college->eligibility   = $request->eligibility;
        $college->duration      = $request->duration;
        $college->affiliation   = $request->affiliation;
        $college->status        = $request->popular_course;
        $college->save();
        return redirect('/admin/colleges/courses/'.$request->school_id)->with('message', 'Course added successfully');
    }

    public function updateSchoolCourses(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'course'        => 'required',
            'seat'          => 'required',
            'fee'           => 'required',
            'duration'      => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }
        
        $check = SchoolClasse::where('school_id', $request->school_id)
                    ->where('class_id', $request->course)
                    ->where('id', '!=', $id)
                    ->count();
        if($check > 0){
            return redirect('/admin/schools/courses/'.$request->school_id)->with('error', 'Course already exist');
        }

        $college                = SchoolClasse::findOrFail($id);
        $college->class_id      = $request->course;
        $college->course_name   = $request->name;
        $college->fee           = $request->fee;
        $college->seat          = $request->seat;
        $college->eligibility   = $request->eligibility;
        $college->duration      = $request->duration;
        $college->affiliation   = $request->affiliation;
        $college->status        = $request->popular_course;
        $college->save();
        return redirect('/admin/schools/courses/'.$college->school_id)->with('message', 'Course updated successfully');
    }

    public function deleteSchoolCourses($id)
    {
        $course = SchoolClasse::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Course deleted successfully');
    }

    public function schoolReviews($id)
    {
        $college = School::where('id', $id)->first();
        $collegeId = $id;
        $reviews = Review::where('type', 3)->where('type_id', $id)->get();
        return view('admin.schools.reviews', compact('college', 'collegeId', 'reviews'));
    }

    public function deleteSchoolReview($id)
    {
        $course = Review::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Deleted successfully');
    }
    
    public function schoolNotification($id)
    {
        $college = School::where('id', $id)->first();
        $collegeId = $id;
        $exams = SchoolNotification::where('school_id', $id)->get();
        return view('admin.schools.notifications', compact('college', 'collegeId', 'exams'));
    }

    public function addSchoolNotification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'college_id'  => 'required',
            'name'        => 'required',
            'details'     => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $college               = new SchoolNotification();
        $college->school_id    = $request->college_id;
        $college->name         = $request->name;
        $college->slug         =  $this->createNotificationSlug($request->name); 
        $college->meta_title   = $request->meta_title;
        $college->meta         = $request->meta;
        $college->details      = $request->details;
        $college->save();
        return redirect('/admin/schools/notifications/'.$request->college_id)->with('message', 'Added successfully');
    }

    public function updateSchoolNotification(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'        => 'required',
            'details'     => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $college               = SchoolNotification::findOrFail($id);
        $college->name         = $request->name;
        $college->slug         = $this->createNotificationSlug($request->name, $id);
        $college->meta_title   = $request->meta_title;
        $college->meta         = $request->meta;
        $college->details      = $request->details;
        $college->save();
        return redirect('/admin/schools/notifications/'.$college->school_id)->with('message', 'Updated successfully');
    }

    public function deleteSchoolNotification($id)
    {
        $course = SchoolNotification::findOrFail($id);
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
        return SchoolNotification::select('slug')->where('slug', 'like', $slug.'%')
                ->where('id', '<>', $id)
                ->get();
    }
}
