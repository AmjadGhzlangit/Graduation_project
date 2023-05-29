<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CandidacyApplicationController;
use App\Http\Controllers\ElectionCommissionController;
use App\Http\Controllers\IdInformationController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// When User open the web site the main page 
Route::get('/', function () {
    return view('test');
});






Route::get('/update_password', function () {
    return view('profile.partials.update-password-form');
})->name('update');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::get('/id_form',[IdInformationController::class,'index'])->name('id_form');
    Route::post('/id_form',[IdInformationController::class,'store'])->name('processId_form');
    Route::get('/form1',[CandidacyApplicationController::class,'index'])->name('form_one');
    Route::post('/form1',[CandidacyApplicationController::class,'store'])->name('processForm_one');
    Route::get('/form2',[ImageController::class,'create'])->name('form_two');
    Route::post('/form2',[ImageController::class,'store'])->name('processForm_two');
    });
    Route::get('/index',[ElectionCommissionController::class,'index'])->name('index');
    Route::get('/blank/{candidacy_application}',[ElectionCommissionController::class,'show'])->name('blank');
    Route::put('/active/{candidacy_application}',[ElectionCommissionController::class,'update'])->name('active');
    Route::put('/delete/{candidacy_application}',[ElectionCommissionController::class,'destroy'])->name('destroy');
    
// Route::get('/admi',[AdminController::class,'index']);
Route::get('/admin/form',[AdminController::class,'create'])->name('show_form');
Route::resource('adm',AdminController::class);
  
    // ->middleware(['auth','is_admin']);
require __DIR__.'/auth.php';


// Note that this controller includes four methods:

// - CandidacyApplicationController::class,'index': displays the first form.
// - [CandidacyApplicationController::class,'store']: processes the first form data, saves it to the session, and redirects to the second form.
// - `[ImageController::class,'create']`: displays the second form.
// - ImageController::class,'store': processes the second form data, merges it with the saved first form data from the session, and redirects to the thank you page.
// - `thankyou`: displays a thank you page.
