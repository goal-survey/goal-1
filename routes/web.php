
<?php
use App\Models\survey;

use App\Models\submitform;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\infoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubmitformController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('land');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/info', function () {
    return view('info');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/home', function () {
    return view('/home');
});


Route::get('viewsurvey/{id}', [SurveyController::class, 'showsurvey']);


// =========================================================

Route::get('profile', [infoController::class, 'index']);
Route::get('editprofile/{id}', [infoController::class, 'edit']);
Route::put('updateprofile/{id}', [infoController::class, 'update']);


Route::post('/storeinfo', [infoController::class, 'store']);
Route::post('/storesurvey', [SurveyController::class, 'store']);


// Route::get('viewsurvey', function () {
//     return view('viewsurvey');
// });

Route::get('surveys', [SurveyController::class, 'index']);

Route::get('/owner/home', function () {
    return view('owner.home');
});

Route::post('/subscriber' , function(Request $request) {
    $sub = new Subscriber;
    $sub->email= $request->email;
    $sub->save();
    return redirect('/')->with('addSub' , "Thank you for being a part of our Family ");
});


// Route::post('/submitform' , function(Request $request) {
//     $submit = new submitform();
//     $submit->user_id = Auth::user()->id;
//     $submit->survey_id = Auth::survey()->id;
//     $submit->save();
//     dd($request);
//     // return redirect('/')->with('addSub' , "Thank you for being a part of our Family ");
// });


// Admin Routes

// Get Users data to admin dashboard
Route::get('admin/dashboard', [UserController::class, 'getUsers']);

// Delete Users OR Owners data to admin dashboard
Route::get('delete/{id}',[UserController::class,'destroy']);


// Get Owners data to admin dashboard
Route::get('admin/owners', [UserController::class, 'getOwners']);


// Get Surveys data to admin dashboard
Route::get('admin/surveys', [SurveyController::class, 'getSurveys']);


Route::get('delete/{id}',[SurveyController::class,'destroy']);

Route::get('submitform', [SubmitformController::class, 'index']);


// ================================================================

Route::get('/contact', [ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [ContactController::class, 'storeContactForm'])->name('contact-form.store');

Route::get('/admin/contact', [ContactController::class, 'showContact'])->name('admin.contact');;
