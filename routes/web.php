<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;

Route::get('/', [WebsiteController::class, 'index']);
Route::get('/blogs', [WebsiteController::class, 'blogs']);
Route::get('/blog-details/{slug}', [WebsiteController::class, 'blogDetails']);
Route::get('/news', [WebsiteController::class, 'news']);
Route::get('/news-details/{slug}', [WebsiteController::class, 'newsDetails']);
Route::get('/study-abroad', [WebsiteController::class, 'studyAbroad']);

Route::get('/schools', [WebsiteController::class, 'schools']);

Route::get('/top-ranked-medical-colleges', [WebsiteController::class, 'topRankedMedicalColleges']);
Route::get('/top-ranked-engineering-colleges', [WebsiteController::class, 'topRankedEngineeringColleges']);
Route::get('/medical-entrance-exams', [WebsiteController::class, 'medicalEntranceExams']);
Route::get('/engineering-entrance-exams', [WebsiteController::class, 'engineeringEntranceExams']);
Route::get('/top-engineering-specializations', [WebsiteController::class, 'topEngineeringSpecializations']);

Route::get('/top-ranked-{slug}-colleges', [WebsiteController::class, 'topRankedColleges']);
Route::get('/top-{slug}-specializations', [WebsiteController::class, 'topSpecializations']);
Route::get('/{slug}-entrance-exams', [WebsiteController::class, 'entranceExams']);

Route::get('/mbbs-admission', [WebsiteController::class, 'mbbsAdmission']);
Route::get('/md-ms', [WebsiteController::class, 'mdMsAdmission']);
Route::get('/college-details/{slug}', [WebsiteController::class, 'collegeDetails']);
Route::get('/abroad-colleges/{slug}', [WebsiteController::class, 'abroadColleges']);
Route::get('/school-details/{slug}', [WebsiteController::class, 'schoolDetails']);

Route::get('/diploma', [WebsiteController::class, 'diploma']);
Route::get('/puc', [WebsiteController::class, 'puc']);
Route::get('/ug', [WebsiteController::class, 'ug'])->name('ug');
Route::get('/pg', [WebsiteController::class, 'pg'])->name('pg');

Route::get('/{slug}/courses', [WebsiteController::class, 'departmentCourses']);
Route::get('/colleges', [WebsiteController::class, 'colleges']);

Route::get('/study-in-{slug}', [WebsiteController::class, 'studyInGermany']);
Route::get('/entrances/{slug}', [WebsiteController::class, 'entranceExam']);

Route::get('/contact-us', function () {
    return view('website.contact-us');
});
Route::get('/about-us', function () {
    return view('website.about-us');
});
Route::get('/site-map', function () {
    return view('website.site-map');
});
Route::get('/disclaimer', function () {
    return view('website.disclaimer');
});
Route::get('/admission-guidance', function () {
    return view('website.admission-guidance');
});
Route::get('/scholarship', function () {
    return view('website.scholarship');
});
Route::get('/mbbs-abroad', function () {
    return view('website.mbbs-abroad');
});
Route::get('/application-process', function () {
    return view('website.application-process');
});
Route::get('/privacy-policy', function () {
    return view('website.privacy-policy');
});

Route::get('/registration', function () {
    return view('website.register');
});

Route::get('/courses', function () {
    return view('website.courses');
});


Route::post('/submit-enquiry', 'App\Http\Controllers\Website\WebsiteController@submitEnquiry');
Route::post('/submit-contact-us', 'App\Http\Controllers\Website\WebsiteController@submitContactUs');
Route::post('/submit-registration', 'App\Http\Controllers\Website\WebsiteController@submitRegistration')->name('submit-registration');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin routes
Route::prefix('admin')->group(function () {
    require __DIR__.'/admin.php';
});
