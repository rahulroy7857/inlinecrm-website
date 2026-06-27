<?php

use Illuminate\Support\Facades\Route;

Route::get('login', 'App\Http\Controllers\Admin\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Admin\Auth\LoginController@login');

Route::group(['middleware' => 'admin.auth'], function() {
	// Dashboard
	Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('home');
	Route::get('/home', 'App\Http\Controllers\Admin\HomeController@index');
	Route::get('/dashboard', 'App\Http\Controllers\Admin\HomeController@index')->name('dashboard');

	Route::get('/our-partners', 'App\Http\Controllers\Admin\OurPartnerController@index');
	Route::post('/add-partner', 'App\Http\Controllers\Admin\OurPartnerController@store');
	Route::get('/delete-partner/{id}', 'App\Http\Controllers\Admin\OurPartnerController@destroy');
	Route::patch('/update-partner/{id}', 'App\Http\Controllers\Admin\OurPartnerController@update');

	Route::get('/enquiries', 'App\Http\Controllers\Admin\HomeController@enquiries');
	Route::post('/enquiries', 'App\Http\Controllers\Admin\HomeController@enquiries');
	Route::get('/delete-enquiry/{id}', 'App\Http\Controllers\Admin\HomeController@destroyEnquiry');
	
	Route::get('/landing-page-enquiries', 'App\Http\Controllers\Admin\HomeController@landingPageEnquiries');
	Route::post('/landing-page-enquiries', 'App\Http\Controllers\Admin\HomeController@landingPageEnquiries');
	
	Route::get('/webinar-enquiries', 'App\Http\Controllers\Admin\HomeController@webinarEnquiries');
	Route::post('/webinar-enquiries', 'App\Http\Controllers\Admin\HomeController@webinarEnquiries');
	
	Route::get('/mailer-enquiries', 'App\Http\Controllers\Admin\HomeController@mailerEnquiries');
	Route::post('/mailer-enquiries', 'App\Http\Controllers\Admin\HomeController@mailerEnquiries');
	
	Route::get('/scholarship-enquiries', 'App\Http\Controllers\Admin\HomeController@scholarshipEnquiries');
	Route::post('/scholarship-enquiries', 'App\Http\Controllers\Admin\HomeController@scholarshipEnquiries');
	
	Route::get('/qna-enquiries', 'App\Http\Controllers\Admin\HomeController@qnaEnquiries');
	Route::post('/qna-enquiries', 'App\Http\Controllers\Admin\HomeController@qnaEnquiries');

	Route::get('/registrations', 'App\Http\Controllers\Admin\HomeController@registrations');
	Route::post('/registrations', 'App\Http\Controllers\Admin\HomeController@registrations');
	Route::get('/view-registration/{id}', 'App\Http\Controllers\Admin\HomeController@registrationDetails');

	Route::resource('blogs', 'App\Http\Controllers\Admin\BlogController');
	Route::get('/delete-blog/{id}', 'App\Http\Controllers\Admin\BlogController@destroy');

	Route::resource('news', 'App\Http\Controllers\Admin\NewsController');
	Route::get('/delete-news/{id}', 'App\Http\Controllers\Admin\NewsController@destroy');

	Route::get('/contacts', 'App\Http\Controllers\Admin\HomeController@contacts');
	Route::post('/contacts', 'App\Http\Controllers\Admin\HomeController@contacts');

	Route::resource('departments', 'App\Http\Controllers\Admin\DepartmentController');
	Route::get('departments/notifications/{id}', 'App\Http\Controllers\Admin\DepartmentController@departmentNotification');
	Route::post('/add-department-notification', 'App\Http\Controllers\Admin\DepartmentController@addDepartmentNotification');
	Route::patch('/update-department-notification/{id}', 'App\Http\Controllers\Admin\DepartmentController@updateDepartmentNotification');
	Route::get('/delete-department-notification/{id}', 'App\Http\Controllers\Admin\DepartmentController@deleteDepartmentNotification');

	Route::resource('courses', 'App\Http\Controllers\Admin\CourseController');

	Route::resource('team', 'App\Http\Controllers\Admin\TeamController');
	Route::get('/delete-team/{id}', 'App\Http\Controllers\Admin\TeamController@destroy');

	Route::resource('colleges', 'App\Http\Controllers\Admin\CollegeController');
	Route::get('colleges/courses/{id}', 'App\Http\Controllers\Admin\CollegeController@collegeCourses');
	Route::post('/add-college-program', 'App\Http\Controllers\Admin\CollegeController@addCollegeCourses');
	Route::patch('/update-college-program/{id}', 'App\Http\Controllers\Admin\CollegeController@updateCollegeCourses');
	Route::get('/delete-college-program/{id}', 'App\Http\Controllers\Admin\CollegeController@deleteCollegeCourses');

	Route::get('colleges/faqs/{id}', 'App\Http\Controllers\Admin\CollegeController@collegeFaq');
	Route::post('/add-college-faq', 'App\Http\Controllers\Admin\CollegeController@addCollegeFaq');
	Route::patch('/update-college-faq/{id}', 'App\Http\Controllers\Admin\CollegeController@updateCollegeFaq');
	Route::get('/delete-college-faq/{id}', 'App\Http\Controllers\Admin\CollegeController@deleteCollegeFaq');

	Route::get('colleges/exams/{id}', 'App\Http\Controllers\Admin\CollegeController@collegeExam');
	Route::post('/add-college-exam', 'App\Http\Controllers\Admin\CollegeController@addCollegeExam');
	Route::patch('/update-college-exam/{id}', 'App\Http\Controllers\Admin\CollegeController@updateCollegeExam');
	Route::get('/delete-college-exam/{id}', 'App\Http\Controllers\Admin\CollegeController@deleteCollegeExam');
	
	Route::get('colleges/notifications/{id}', 'App\Http\Controllers\Admin\CollegeController@collegeNotification');
	Route::post('/add-college-notification', 'App\Http\Controllers\Admin\CollegeController@addCollegeNotification');
	Route::patch('/update-college-notification/{id}', 'App\Http\Controllers\Admin\CollegeController@updateCollegeNotification');
	Route::get('/delete-college-notification/{id}', 'App\Http\Controllers\Admin\CollegeController@deleteCollegeNotification');

	Route::get('colleges/reviews/{id}', 'App\Http\Controllers\Admin\CollegeController@collegeReviews');
	Route::get('/delete-college-review/{id}', 'App\Http\Controllers\Admin\CollegeController@deleteCollegeReview');

	Route::resource('countries', 'App\Http\Controllers\Admin\CountryController');

	Route::resource('/states', 'App\Http\Controllers\Admin\StateController');
	Route::resource('/classes', 'App\Http\Controllers\Admin\ClassController');
	Route::resource('/schools', 'App\Http\Controllers\Admin\SchoolController');

	Route::get('schools/courses/{id}', 'App\Http\Controllers\Admin\SchoolController@schoolCourses');
	Route::post('/add-school-program', 'App\Http\Controllers\Admin\SchoolController@addSchoolCourses');
	Route::patch('/update-school-program/{id}', 'App\Http\Controllers\Admin\SchoolController@updateSchoolCourses');
	Route::get('/delete-school-program/{id}', 'App\Http\Controllers\Admin\SchoolController@deleteSchoolCourses');

	Route::get('schools/faqs/{id}', 'App\Http\Controllers\Admin\SchoolController@schoolFaq');
	Route::post('/add-school-faq', 'App\Http\Controllers\Admin\SchoolController@addSchoolFaq');
	Route::patch('/update-school-faq/{id}', 'App\Http\Controllers\Admin\SchoolController@updateSchoolFaq');
	Route::get('/delete-school-faq/{id}', 'App\Http\Controllers\Admin\SchoolController@deleteSchoolFaq');
	
	Route::get('schools/notifications/{id}', 'App\Http\Controllers\Admin\SchoolController@schoolNotification');
	Route::post('/add-school-notification', 'App\Http\Controllers\Admin\SchoolController@addSchoolNotification');
	Route::patch('/update-school-notification/{id}', 'App\Http\Controllers\Admin\SchoolController@updateSchoolNotification');
	Route::get('/delete-school-notification/{id}', 'App\Http\Controllers\Admin\SchoolController@deleteSchoolNotification');

	Route::get('schools/reviews/{id}', 'App\Http\Controllers\Admin\SchoolController@schoolReviews');
	Route::get('/delete-school-review/{id}', 'App\Http\Controllers\Admin\SchoolController@deleteSchoolReview');

	Route::resource('abroad-colleges', 'App\Http\Controllers\Admin\AbroadController');
	Route::get('/abroad-colleges/courses/{id}', 'App\Http\Controllers\Admin\AbroadController@collegeCourses');
	Route::post('/add-abroad-colleges-program', 'App\Http\Controllers\Admin\AbroadController@addCollegeCourses');
	Route::patch('/update-abroad-colleges-program/{id}', 'App\Http\Controllers\Admin\AbroadController@updateCollegeCourses');
	Route::get('/delete-abroad-colleges-program/{id}', 'App\Http\Controllers\Admin\AbroadController@deleteCollegeCourses');

	Route::get('/abroad-colleges/faqs/{id}', 'App\Http\Controllers\Admin\AbroadController@collegeFaq');
	Route::post('/add-abroad-colleges-faq', 'App\Http\Controllers\Admin\AbroadController@addCollegeFaq');
	Route::patch('/update-abroad-colleges-faq/{id}', 'App\Http\Controllers\Admin\AbroadController@updateCollegeFaq');
	Route::get('/delete-abroad-colleges-faq/{id}', 'App\Http\Controllers\Admin\AbroadController@deleteCollegeFaq');

	Route::get('/abroad-colleges/exams/{id}', 'App\Http\Controllers\Admin\AbroadController@collegeExam');
	Route::post('/add-abroad-colleges-exam', 'App\Http\Controllers\Admin\AbroadController@addCollegeExam');
	Route::patch('/update-abroad-colleges-exam/{id}', 'App\Http\Controllers\Admin\AbroadController@updateCollegeExam');
	Route::get('/delete-abroad-colleges-exam/{id}', 'App\Http\Controllers\Admin\AbroadController@deleteCollegeExam');
	
	Route::get('/abroad-colleges/notifications/{id}', 'App\Http\Controllers\Admin\AbroadController@collegeNotification');
	Route::post('/add-abroad-college-notification', 'App\Http\Controllers\Admin\AbroadController@addCollegeNotification');
	Route::patch('/update-abroad-college-notification/{id}', 'App\Http\Controllers\Admin\AbroadController@updateCollegeNotification');
	Route::get('/delete-abroad-college-notification/{id}', 'App\Http\Controllers\Admin\AbroadController@deleteCollegeNotification');

	Route::get('abroad/reviews/{id}', 'App\Http\Controllers\Admin\AbroadController@abroadReviews');
	Route::get('/delete-abroad-review/{id}', 'App\Http\Controllers\Admin\AbroadController@deleteAbroadReview');

	Route::get('/admission-enquiries', 'App\Http\Controllers\Admin\HomeController@AdmissionEnquiries');
	Route::get('/delete-admission-enquiry/{id}', 'App\Http\Controllers\Admin\HomeController@destroyAdmissionEnquiry');

	Route::resource('notifications', 'App\Http\Controllers\Admin\NotificationController');
	Route::get('/delete-notification/{id}', 'App\Http\Controllers\Admin\NotificationController@destroy');

	Route::resource('testimonials', 'App\Http\Controllers\Admin\TestimonialController');
	Route::get('/delete-testimonial/{id}', 'App\Http\Controllers\Admin\TestimonialController@destroy');

	Route::resource('events', 'App\Http\Controllers\Admin\EventController');
	Route::get('/delete-event/{id}', 'App\Http\Controllers\Admin\EventController@destroy');

	Route::resource('careers', 'App\Http\Controllers\Admin\CareerController');
	Route::get('/delete-career/{id}', 'App\Http\Controllers\Admin\CareerController@destroy');

	Route::get('/career-enquiries/{id}', 'App\Http\Controllers\Admin\CareerController@careerEnquiry');
	Route::get('/delete-career-enquiry/{id}', 'App\Http\Controllers\Admin\CareerController@deleteCareerEnquiry');

	Route::resource('portfolio', 'App\Http\Controllers\Admin\GalleryController');
	Route::get('/delete-portfolio/{id}', 'App\Http\Controllers\Admin\GalleryController@destroy');

	Route::resource('indoor-facilities', 'App\Http\Controllers\Admin\IndoorFacilityController');
	Route::get('/delete-indoor-facility/{id}', 'App\Http\Controllers\Admin\IndoorFacilityController@destroy');

	Route::resource('outdoor-facilities', 'App\Http\Controllers\Admin\OutdoorFacilityController');
	Route::get('/delete-outdoor-facility/{id}', 'App\Http\Controllers\Admin\OutdoorFacilityController@destroy');

	Route::get('/change-password', 'App\Http\Controllers\Admin\HomeController@changePassword');
	Route::post('/update-password', 'App\Http\Controllers\Admin\HomeController@updatePassword');

	Route::post('logout', 'App\Http\Controllers\Admin\Auth\LoginController@logout')->name('logout');
	Route::get('/logout', 'App\Http\Controllers\Admin\Auth\LoginController@logout');

	// Specializations
	Route::get('/specializations/{courseId}', 'App\Http\Controllers\Admin\SpecializationController@index')->name('admin.specializations.index');
	Route::post('/specializations', 'App\Http\Controllers\Admin\SpecializationController@store')->name('admin.specializations.store');
	Route::get('/specializations/{id}/edit', 'App\Http\Controllers\Admin\SpecializationController@edit')->name('admin.specializations.edit');
	Route::put('/specializations/{id}', 'App\Http\Controllers\Admin\SpecializationController@update')->name('admin.specializations.update');
	Route::get('/delete-specializations/{id}', 'App\Http\Controllers\Admin\SpecializationController@destroy')->name('admin.specializations.destroy');

	Route::resource('entrance-exams', 'App\Http\Controllers\Admin\EntranceExamController');
	Route::get('/delete-entrance-exam/{id}', 'App\Http\Controllers\Admin\EntranceExamController@destroy');
});

// // Register
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// // Reset Password
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// // Confirm Password
// Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
// Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Verify Email
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
