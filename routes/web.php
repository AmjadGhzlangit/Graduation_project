<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidacyApplicationController;
use App\Http\Controllers\ElectionCommissionController;
use App\Http\Controllers\IdInformationController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MessageeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Requests\IdInformationRequset;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use PharIo\Manifest\ElementCollection;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/email', function () {
    Mail::to('amjadghzlangit@gmail.com')->send(new TestEmail);
    return view('dashboard');
});


// When User open the web site the main page 
Route::get('/',[CandidacyApplicationController::class,'show'])->name('show_dashboard');

Route::post('/messages', [MessageeController::class, 'store'])->name('messages.store');
Route::post('/messages/{message}', [MessageeController::class, 'delete'])->name('messages.delete');

Route::get('election/{candidacy_application}',[CandidacyApplicationController::class,'show_data'])->name('show_election');
Route::get('dashborad/news/{news}',[CandidacyApplicationController::class,'display_news'])->name('display_news');

Route::get('/update_password', function () {
            return view('profile.partials.update-password-form');
        })->name('update');

Route::get('/dashboard', function () {
            return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/user', [IdInformationController::class, 'updata_user'])->name('user.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::get('/id_form',[IdInformationController::class,'index'])->name('id_form');
    Route::post('/id_form',[IdInformationController::class,'store'])->name('processId_form');
    Route::get('/form1',[CandidacyApplicationController::class,'index'])->name('form_one');
    Route::post('/form1',[CandidacyApplicationController::class,'store'])->name('processForm_one');
    Route::get('/form2',[ImageController::class,'create'])->name('form_two');
    Route::post('/form2',[ImageController::class,'store'])->name('processForm_two');
    Route::post('/update/{candidacy_application}',[CandidacyApplicationController::class,'update'])->name('update_votes');

    Route::view('/response','nomiation.response_page');

    });

Route::get('/index',[ElectionCommissionController::class,'index'])->name('index');
Route::view('/election','election_commission.pages.create_election')->name('create_election');
Route::post('/election/create',[ElectionCommissionController::class,'store'])->name('store_election_data');
Route::get('/blank/{candidacy_application}',[ElectionCommissionController::class,'show'])->name('blank');
Route::put('/active/{candidacy_application}',[ElectionCommissionController::class,'update'])->name('active');
Route::put('/delete/{candidacy_application}',[ElectionCommissionController::class,'destroy'])->name('destroy');

// test 
// Route::view('/election_finish','finish-election')->name('finish_election');

Route::get('/election_finish',[CandidacyApplicationController::class,'finish_election'])->name('finish_election');  
Route::get('/admin/login', [AdminController::class,'login']);
Route::get('/admin/form',[AdminController::class,'create'])->name('show_form');
Route::resource('adm',AdminController::class)->middleware('is_admin');
  
    // ->middleware(['auth','is_admin']);

Route::resource('news',NewsController::class);
// Route::post('/search',[CandidacyApplicationController::class,'search'])->name('search');
Route::post('/search/index', [CandidacyApplicationController::class, 'search'])->name('search.index');
require __DIR__.'/auth.php';


// Note that this controller includes four methods:

// - CandidacyApplicationController::class,'index': displays the first form.
// - [CandidacyApplicationController::class,'store']: processes the first form data, saves it to the session, and redirects to the second form.
// - `[ImageController::class,'create']`: displays the second form.
// - ImageController::class,'store': processes the second form data, merges it with the saved first form data from the session, and redirects to the thank you page.
// - `thankyou`: displays a thank you page.
