<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Register;
use App\Models\ContactEnquiry;
use App\Models\Blog;
use App\Models\News;
use App\Models\School;
use App\Models\College;
use App\Models\AbroadCollege;
use App\Models\LandinPageEnquiry;
use App\Models\WebinarEnquiry;
use App\Models\MailerEnquiry;
use App\Models\ScholarshipEnquiry;
use App\Models\QnaEnquiry;
use Validator;
use App\Admin;
use Hash;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth');
    }

    /**
     * Show the Admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        $colleges = College::count();
        $schools = School::count();
        $abroadColleges = AbroadCollege::count();
        $blogs = Blog::count();
        $news = News::count();
        $registrations = Register::count();
        $contacts = ContactEnquiry::count();
        $enquiry = Enquiry::count();
        $enquiries = Enquiry::orderBy('id', 'desc')->limit(10)->get();

        return view('admin.home', compact('colleges', 'schools', 'abroadColleges', 'blogs', 'news', 'registrations', 'contacts', 'enquiry', 'enquiries'));
    }

    public function changePassword()
    {
        return view('admin.change-password');
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password'   => 'Required',
            'new_password'       => 'Required|min:6',
            'confirm_password'   => 'Required|min:6|same:new_password',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator->errors())->withInput();
        }

        $current_passwords = Auth::guard('admin')->user()->password; 
        if(Hash::check($request->current_password, $current_passwords)){
            $user           = Admin::findOrFail(Auth::guard('admin')->user()->id);
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->back()->with('message', 'Password Changed Successfully');
        } else {
            return redirect()->back()->with('delete', 'Old Password not Match');
        }
    }

    public function enquiries(Request $request)
    {
        if($request->date_from && $request->date_to){
            $from = $request->date_from;
            $to = $request->date_to;
            $enquiries = Enquiry::whereDate('created_at', '>=', date('Y-m-d', strtotime($request->date_from)))
                        ->whereDate('created_at', '<=', date('Y-m-d', strtotime($request->date_to)))
                        ->orderBy('id', 'desc')->get();
        } else {
            $from = date('Y-m-01');
            $to = date('Y-m-d');
            $enquiries = Enquiry::whereDate('created_at', '>=', $from)
                        ->whereDate('created_at', '<=', $to)
                        ->orderBy('id', 'desc')->get();
        }
        return view('admin.enquiries', compact('enquiries', 'to', 'from'));
    }
    
    public function landingPageEnquiries(Request $request)
    {
        if($request->date_from && $request->date_to){
            $from = $request->date_from;
            $to = $request->date_to;
            $enquiries = LandinPageEnquiry::whereDate('created_at', '>=', date('Y-m-d', strtotime($request->date_from)))
                        ->whereDate('created_at', '<=', date('Y-m-d', strtotime($request->date_to)))
                        ->orderBy('id', 'desc')->get();
        } else {
            $from = date('Y-m-01');
            $to = date('Y-m-d');
            $enquiries = LandinPageEnquiry::whereDate('created_at', '>=', $from)
                        ->whereDate('created_at', '<=', $to)
                        ->orderBy('id', 'desc')->get();
        }
        return view('admin.landing-page-enquiries', compact('enquiries', 'to', 'from'));
    }
    
    public function webinarEnquiries(Request $request)
    {
        if($request->date_from && $request->date_to){
            $from = $request->date_from;
            $to = $request->date_to;
            $enquiries = WebinarEnquiry::whereDate('created_at', '>=', date('Y-m-d', strtotime($request->date_from)))
                        ->whereDate('created_at', '<=', date('Y-m-d', strtotime($request->date_to)))
                        ->orderBy('id', 'desc')->get();
        } else {
            $from = date('Y-m-01');
            $to = date('Y-m-d');
            $enquiries = WebinarEnquiry::whereDate('created_at', '>=', $from)
                        ->whereDate('created_at', '<=', $to)
                        ->orderBy('id', 'desc')->get();
        }
        return view('admin.webinar-enquiries', compact('enquiries', 'to', 'from'));
    }
    
    public function mailerEnquiries(Request $request)
    {
        if($request->date_from && $request->date_to){
            $from = $request->date_from;
            $to = $request->date_to;
            $enquiries = MailerEnquiry::whereDate('created_at', '>=', date('Y-m-d', strtotime($request->date_from)))
                        ->whereDate('created_at', '<=', date('Y-m-d', strtotime($request->date_to)))
                        ->orderBy('id', 'desc')->get();
        } else {
            $from = date('Y-m-01');
            $to = date('Y-m-d');
            $enquiries = MailerEnquiry::whereDate('created_at', '>=', $from)
                        ->whereDate('created_at', '<=', $to)
                        ->orderBy('id', 'desc')->get();
        }
        return view('admin.mailer-enquiries', compact('enquiries', 'to', 'from'));
    }
    
    public function scholarshipEnquiries(Request $request)
    {
        if($request->date_from && $request->date_to){
            $from = $request->date_from;
            $to = $request->date_to;
            $enquiries = ScholarshipEnquiry::whereDate('created_at', '>=', date('Y-m-d', strtotime($request->date_from)))
                        ->whereDate('created_at', '<=', date('Y-m-d', strtotime($request->date_to)))
                        ->orderBy('id', 'desc')->get();
        } else {
            $from = date('Y-m-01');
            $to = date('Y-m-d');
            $enquiries = ScholarshipEnquiry::whereDate('created_at', '>=', $from)
                        ->whereDate('created_at', '<=', $to)
                        ->orderBy('id', 'desc')->get();
        }
        return view('admin.scholarship-enquiries', compact('enquiries', 'to', 'from'));
    }
    
    public function qnaEnquiries(Request $request)
    {
        if($request->date_from && $request->date_to){
            $from = $request->date_from;
            $to = $request->date_to;
            $enquiries = QnaEnquiry::whereDate('created_at', '>=', date('Y-m-d', strtotime($request->date_from)))
                        ->whereDate('created_at', '<=', date('Y-m-d', strtotime($request->date_to)))
                        ->orderBy('id', 'desc')->get();
        } else {
            $from = date('Y-m-01');
            $to = date('Y-m-d');
            $enquiries = QnaEnquiry::whereDate('created_at', '>=', $from)
                        ->whereDate('created_at', '<=', $to)
                        ->orderBy('id', 'desc')->get();
        }
        return view('admin.qna-enquiries', compact('enquiries', 'to', 'from'));
    }

    public function registrations(Request $request)
    {
        if($request->date_from && $request->date_to){
            $from = $request->date_from;
            $to = $request->date_to;
            $registrations = Register::whereDate('created_at', '>=', date('Y-m-d', strtotime($request->date_from)))
                        ->whereDate('created_at', '<=', date('Y-m-d', strtotime($request->date_to)))
                        ->orderBy('id', 'desc')->get();
        } else {
            $from = date('Y-m-01');
            $to = date('Y-m-d');
            $registrations = Register::whereDate('created_at', '>=', $from)
                        ->whereDate('created_at', '<=', $to)
                        ->orderBy('id', 'desc')->get();
        }
        return view('admin.registrations', compact('registrations', 'to', 'from'));
    }

    public function registrationDetails($id)
    {
        $registration = Register::findOrFail($id);
        return view('admin.registration-details', compact('registration'));
    }

    public function contacts(Request $request)
    {
        if($request->date_from && $request->date_to){
            $from = $request->date_from;
            $to = $request->date_to;
            $contacts = ContactEnquiry::whereDate('created_at', '>=', date('Y-m-d', strtotime($request->date_from)))
                        ->whereDate('created_at', '<=', date('Y-m-d', strtotime($request->date_to)))
                        ->orderBy('id', 'desc')->get();
        } else {
            $from = date('Y-m-01');
            $to = date('Y-m-d');
            $contacts = ContactEnquiry::whereDate('created_at', '>=', $from)
                        ->whereDate('created_at', '<=', $to)
                        ->orderBy('id', 'desc')->get();
        }
        return view('admin.contacts', compact('contacts', 'to', 'from'));
    }

    public function destroyEnquiry($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();
        return redirect()->back()->with('message', 'Enquiry Deleted Successfully');
    }

    public function destroyAdmissionEnquiry($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();
        return redirect()->back()->with('message', 'Admission Enquiry Deleted Successfully');
    }

    public function AdmissionEnquiries()
    {
        $enquiries = Enquiry::where('type', 'admission')->orderBy('id', 'desc')->get();
        return view('admin.admission-enquiries', compact('enquiries'));
    }
}
