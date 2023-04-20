<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CandidacyApplicationController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/form1',[CandidacyApplicationController::class,'index'])->name('form_one');
    Route::post('/form1',[CandidacyApplicationController::class,'store'])->name('processForm_one');
    Route::get('/form2',[ImageController::class,'create'])->name('form_two');
    Route::post('/form2',[ImageController::class,'store'])->name('processForm_two');
    });

require __DIR__.'/auth.php';


// Note that this controller includes four methods:

// - CandidacyApplicationController::class,'index': displays the first form.
// - [CandidacyApplicationController::class,'store']: processes the first form data, saves it to the session, and redirects to the second form.
// - `[ImageController::class,'create']`: displays the second form.
// - ImageController::class,'store': processes the second form data, merges it with the saved first form data from the session, and redirects to the thank you page.
// - `thankyou`: displays a thank you page.
