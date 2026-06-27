<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\ContactEnquiry;
use App\Models\Register;
use App\Models\OurPartner;
use App\Models\Blog;
use App\Models\News;
use App\Models\Country;
use App\Models\School;
use App\Models\Course;
use App\Models\CollegeCourse;
use App\Models\EntranceExam;
use App\Models\College;
use App\Models\Specialization;
use App\Models\Departments;
use App\Models\CollegeFaq;
use App\Models\AbroadCollege;
use App\Models\AbroadCollegeCourse;
use App\Models\AbroadCollegeFaq;
use App\Models\SchoolClasse;
use App\Models\SchoolFaq;
class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourPartners = OurPartner::all();
        $medicalCourses = Course::where('department_id', 1)->orderByRaw('CASE WHEN `order` IS NULL OR `order` = "" THEN 1 ELSE 0 END, `order` ASC')
        ->limit(6)->get();
        $engineeringCourses = Course::where('department_id', 8)->orderByRaw('CASE WHEN `order` IS NULL OR `order` = "" THEN 1 ELSE 0 END, `order` ASC')
        ->limit(6)->get();
        $managementCourses = Course::where('department_id', 4)->orderByRaw('CASE WHEN `order` IS NULL OR `order` = "" THEN 1 ELSE 0 END, `order` ASC')
        ->limit(6)->get();
        $lawCourses = Course::where('department_id', 14)->orderByRaw('CASE WHEN `order` IS NULL OR `order` = "" THEN 1 ELSE 0 END, `order` ASC')
        ->limit(6)->get();
        $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();
        return view('website.index', compact('ourPartners', 'medicalCourses', 'engineeringCourses', 'managementCourses', 'lawCourses', 'blogs'));
    }

    public function blogs(Request $request)
    {
        $query = Blog::query();

        // Country filter
        if ($request->filled('countrySelect') && $request->countrySelect != '') {
            $query->where('country', $request->countrySelect);
        }

        // Category filter
        if ($request->filled('categorySelect') && $request->categorySelect != '1') {
            $query->where('category', $request->categorySelect);
        }

        $blogs = $query->orderBy('id', 'desc')->get();
        return view('website.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('website.blog-details', compact('blog'));
    }

    public function news(Request $request)
    {
        $query = News::query();

        // Country filter
        if ($request->filled('countrySelect') && $request->countrySelect != '') {
            $query->where('country', $request->countrySelect);
        }

        // Category filter
        if ($request->filled('categorySelect') && $request->categorySelect != '1') {
            $query->where('category', $request->categorySelect);
        }

        $news = $query->orderBy('id', 'desc')->get();
        return view('website.news', compact('news'));
    }

    public function newsDetails($slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('website.news-details', compact('news'));
    }

    public function studyAbroad()
    {
        $countries = Country::where('name', '!=', 'India')->get();
        return view('website.study-abroad', compact('countries'));
    }

    public function schools()
    {
        $schools = School::all();
        return view('website.schools', compact('schools'));
    }

    public function topRankedColleges($slug)
    {
        $course = Course::where('slug', $slug)->first();
        if(!$course){
            abort(404);
        }
        $name = $course->name;
        $colleges = CollegeCourse::join('colleges', 'colleges.id', '=', 'college_courses.college_id')
                ->where('college_courses.course_id', $course->id)
                ->where('colleges.status', 1)
                ->select('colleges.*')
                ->distinct()
                ->get();
        $title = 'Top Ranked '.$name.' Colleges';
        return view('website.top-ranked-colleges', compact('course', 'name', 'colleges', 'title'));
    }

    public function topRankedMedicalColleges()
    {
        $name = 'Medical';
        $slug = 'medical';
        $colleges = CollegeCourse::join('colleges', 'colleges.id', 'college_courses.college_id')
                    ->join('courses', 'courses.id', 'college_courses.course_id')
                    ->join('departments', 'departments.id', 'courses.department_id')
                    ->where('departments.id', 1)
                    ->where('colleges.status', 1)
                    ->select('colleges.*')
                    ->groupBy('colleges.id')
                    ->get();
        $title = 'Top Ranked '.$name.' Colleges';
        return view('website.top-ranked-colleges', compact('name', 'colleges', 'title'));
    }

    public function topRankedEngineeringColleges()
    {
        $name = 'Engineering';
        $slug = 'engineering';
        $colleges = CollegeCourse::join('colleges', 'colleges.id', 'college_courses.college_id')
                    ->join('courses', 'courses.id', 'college_courses.course_id')
                    ->join('departments', 'departments.id', 'courses.department_id')
                    ->where('departments.id', 8)
                    ->where('colleges.status', 1)
                    ->select('colleges.*')
                    ->groupBy('colleges.id')
                    ->get();
        $title = 'Top Ranked '.$name.' Colleges';
        return view('website.top-ranked-colleges', compact('name', 'colleges', 'title'));
    }

    public function topSpecializations($slug)
    {
        $course = Course::where('slug', $slug)->first();
        if(!$course){
            abort(404);
        }
        $name = $course->name;
        $slug = $course->slug;
        $specializations = Specialization::where('course_id', $course->id)->get();
        return view('website.top-specializations', compact('specializations', 'name', 'slug'));
    }

    public function topEngineeringSpecializations()
    {
        $name = 'Engineering';
        $slug = 'engineering';
        $courses = Course::where('department_id', 8)->pluck('id');
        $specializations = Specialization::whereIn('course_id', $courses)->get();
        return view('website.top-specializations', compact('specializations', 'name', 'slug'));
    }

    public function entranceExams($slug)
    {
        $course = Course::where('slug', $slug)->first();
        if(!$course){
            abort(404);
        }
        $name = $course->name;
        $slug = $course->slug;
        $exams = EntranceExam::whereHas('courses', function ($query) use ($course) {
            $query->whereIn('courses.id', [$course->id]);
        })->get();
        return view('website.entrance-exams', compact('course', 'exams', 'name', 'slug'));
    }

    public function medicalEntranceExams()
    {
        $name = 'Medical';
        $slug = 'medical';
        $courses = Course::where('department_id', 1)->pluck('id');
        $exams = EntranceExam::whereHas('courses', function ($query) use ($courses) {
            $query->whereIn('courses.id', $courses);
        })->get();
        return view('website.entrance-exams', compact('exams', 'name', 'slug'));
    }

    public function engineeringEntranceExams()
    {
        $name = 'Engineering';
        $slug = 'engineering';
        $courses = Course::where('department_id', 8)->pluck('id');
        $exams = EntranceExam::whereHas('courses', function ($query) use ($courses) {
            $query->whereIn('courses.id', $courses);
        })->get();
        return view('website.entrance-exams', compact('exams', 'name', 'slug'));
    }

    public function mbbsAdmission()
    {
        $colleges = CollegeCourse::join('colleges', 'colleges.id', 'college_courses.college_id')
                    ->where('college_courses.course_id', 1)
                    ->where('colleges.status', 1)
                    ->select('colleges.*')
                    ->groupBy('colleges.id')
                    ->get();
        return view('website.mbbs-admission', compact('colleges'));
    }

    public function mdMsAdmission()
    {
        $colleges = CollegeCourse::join('colleges', 'colleges.id', 'college_courses.college_id')
                    ->whereIn('college_courses.course_id', [307, 308])
                    ->where('colleges.status', 1)
                    ->select('colleges.*')
                    ->groupBy('colleges.id')
                    ->get();
        $mdSpecializations = Specialization::where('course_id', 307)->get();
        $msSpecializations = Specialization::where('course_id', 308)->get();
        return view('website.md-ms', compact('colleges', 'mdSpecializations', 'msSpecializations'));
    }

    public function collegeDetails($slug)
    {
        $college = College::where('slug', $slug)->first();
        if(!$college){
            abort(404);
        }
        $pgCourses = CollegeCourse::where('college_id', $college->id)->where('type', 2)->orderBy('course_name', 'asc')->get();
        $ugCourses = CollegeCourse::where('college_id', $college->id)->where('type', 1)->orderBy('course_name', 'asc')->get();
        $diplomaCourses = CollegeCourse::where('college_id', $college->id)->where('type', 3)->orderBy('course_name', 'asc')->get();
        $pucCourses = CollegeCourse::where('college_id', $college->id)->where('type', 4)->orderBy('course_name', 'asc')->get();
        $faqs = CollegeFaq::where('college_id', $college->id)->get();
        return view('website.college-details', compact('college', 'pgCourses', 'ugCourses', 'diplomaCourses', 'pucCourses', 'faqs'));
    }

    public function abroadColleges($slug)
    {
        $college = AbroadCollege::where('slug', $slug)->first();
        if(!$college){
            abort(404);
        }
        $pgCourses = AbroadCollegeCourse::where('college_id', $college->id)->where('type', 2)->orderBy('course_name', 'asc')->get();
        $ugCourses = AbroadCollegeCourse::where('college_id', $college->id)->where('type', 1)->orderBy('course_name', 'asc')->get();
        $diplomaCourses = AbroadCollegeCourse::where('college_id', $college->id)->where('type', 3)->orderBy('course_name', 'asc')->get();
        $pucCourses = AbroadCollegeCourse::where('college_id', $college->id)->where('type', 4)->orderBy('course_name', 'asc')->get();
        $faqs = AbroadCollegeFaq::where('college_id', $college->id)->get();
        return view('website.college-details', compact('college', 'pgCourses', 'ugCourses', 'diplomaCourses', 'pucCourses', 'faqs'));
    }

    public function diploma()
    {
        $colleges = CollegeCourse::join('colleges', 'colleges.id', 'college_courses.college_id')
                    ->join('courses', 'courses.id', 'college_courses.course_id')
                    ->where('courses.type', 3)
                    ->where('colleges.status', 1)
                    ->select('colleges.*')
                    ->groupBy('colleges.id')
                    ->get();
        return view('website.diploma', compact('colleges'));
    }

    public function puc()
    {
        $colleges = CollegeCourse::join('colleges', 'colleges.id', 'college_courses.college_id')
                    ->join('courses', 'courses.id', 'college_courses.course_id')
                    ->where('courses.type', 4)
                    ->where('colleges.status', 1)
                    ->select('colleges.*')
                    ->groupBy('colleges.id')
                    ->get();
        return view('website.puc', compact('colleges'));
    }
    
    public function ug()
    {
        $departments = Departments::with('ugCourses')->whereHas('ugCourses', function($query) {
                $query->where('type', 1)
                      ->where('status', 1);
            })
            ->where('status', 1)
            ->orderBy('position', 'asc')
            ->get();
        return view('website.ug', compact('departments'));
    }
    
    public function pg()
    {
        $departments = Departments::with('pgCourses')->whereHas('pgCourses', function($query) {
                $query->where('type', 2)
                      ->where('status', 1);
            })
            ->where('status', 1)
            ->orderBy('position', 'asc')
            ->get();
        return view('website.pg', compact('departments'));
    }

    public function departmentCourses($slug)
    {
        $department = Departments::where('slug', $slug)->first();
        if(!$department){
            abort(404);
        }
        $name = $department->name;
        $courses = Course::where('department_id', $department->id)
        ->orderByRaw('CASE WHEN `order` IS NULL OR `order` = "" THEN 1 ELSE 0 END, `order` ASC')
        ->get();
        return view('website.department-courses', compact('department', 'name', 'courses'));
    }
    
    public function entranceExam($slug)
    {
        $exams = EntranceExam::where('slug', $slug)->get();
        if(!$exams){
            abort(404);
        }
        $name = $exams->first()->name;
        return view('website.entrance-exam', compact('exams', 'name', 'slug'));
    }

    public function colleges()
    {
        $departments = Departments::orderBy('position', 'asc')->get();
        return view('website.colleges', compact('departments'));
    }

    public function studyInGermany($slug)
    {
        $country = Country::where('slug', $slug)->first();
        if(!$country){
            abort(404);
        }
        $name = $country->name;
        $abroadColleges = AbroadCollege::where('country_id', $country->id)->get();
        return view('website.study-in-germany', compact('country', 'name', 'abroadColleges'));
    }

    public function schoolDetails($slug)
    {
        $school = School::where('slug', $slug)->first();
        if(!$school){
            abort(404);
        }
        $courses = SchoolClasse::where('school_id', $school->id)->orderBy('course_name', 'asc')->get();
        
        $faqs = SchoolFaq::where('school_id', $school->id)->get();
        return view('website.school-details', compact('school', 'courses', 'faqs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function submitEnquiry(Request $request)
    {
        // Honeypot validation - if website field is filled, it's likely spam
        // if ($request->filled('website')) {
        //     return redirect()->back()->with('error', 'Invalid submission detected.');
        // }

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:12',
            'course' => 'required|string|max:255',
            'place' => 'string|max:255',
            'type' => 'required|string|max:255',
        ]);

        try {
            // Check for existing enquiries with same mobile or email
            $existingEnquiry = Enquiry::where('phone', $request->phone)
                ->orWhere('email', $request->email)
                ->first();

            // Set status: 1 for new lead, 2 for duplicate
            $status = $existingEnquiry ? 2 : 1;

            // Get current page URL
            $currentPage = request()->url();

            // Create new enquiry record
            $enquiry = Enquiry::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'course' => $request->course,
                'place' => $request->place,
                'source' => $request->type,
                'page' => $currentPage,
                'status' => $status,
                'message' => $request->message
            ]);

            if($existingEnquiry){
                return redirect()->back()->with('error', 'Enquiry already exists.');
            } else {
                return redirect()->back()->with('success', 'Enquiry submitted successfully! We will contact you soon.');
            }
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function submitContactUs(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:12',
            'destination' => 'required|string|max:255',
            'course' => 'required|string|max:255',
        ]);

        try {
          
            // Create new enquiry record
            $enquiry = ContactEnquiry::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->course.' - '.$request->message
            ]);

           
            return redirect()->back()->with('success', 'Enquiry submitted successfully! We will contact you soon.');
            
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function submitRegistration(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'formName' => 'required|string|max:100',
            'formStuMobile' => 'required|string|max:25',
            'formAltMobile' => 'required|string|max:25',
            'formDOB' => 'required|string|max:25',
            'formDestination' => 'required|string|max:20',
            'formFatherName' => 'required|string|max:100',
            'formFatherMobile' => 'required|string|max:20',
            'formMotherName' => 'required|string|max:100',
            'formMotherMobile' => 'required|string|max:20',
            'formAddress' => 'required|string|max:200',
            'formCity' => 'required|string|max:100',
            'formPostalCode' => 'required|string|max:20',
            'formpercentage10' => 'required|string|max:25',
            'formpercentage12' => 'required|string|max:25',
            'formCourse' => 'required|string|max:100',
            'agree' => 'required',
        ]);

        try {
            // Check for existing registration with same mobile number
            $existingRegistration = Register::where('number', $request->formStuMobile)
                ->orWhere('alternative_number', $request->formAltMobile)
                ->first();

            if ($existingRegistration) {
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Registration already exists with this mobile number.');
            }
          
            // Create new registration record
            $registration = Register::create([
                'name' => $request->formName,
                'number' => $request->formStuMobile,
                'alternative_number' => $request->formAltMobile,
                'dob' => $request->formDOB,
                'gender' => $request->formDestination,
                'father' => $request->formFatherName,
                'mother' => $request->formMotherName,
                'father_no' => $request->formFatherMobile,
                'mother_no' => $request->formMotherMobile,
                'address' => $request->formAddress,
                'city' => $request->formCity,
                'post' => $request->formPostalCode,
                'course' => $request->formCourse,
                'tenth' => $request->formpercentage10,
                'twelth' => $request->formpercentage12,
            ]);

            return redirect()->back()->with('success', 'Registration submitted successfully! We will contact you soon.');
            
        } catch (\Exception $e) {
            // Redirect back with error message and old input
            return redirect()->back()
                ->withInput()
                ->with('error', 'Something went wrong. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
