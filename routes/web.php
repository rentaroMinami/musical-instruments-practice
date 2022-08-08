<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PracticeHistoryController;
use App\Http\Controllers\MyProfileController;


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
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return view('auth/login');
});

Route::get('/dashboard', [MyProfileController::class, 'index'])
    ->middleware(['auth'])->name('dashboard');



Route::get('/practice-history', [PracticeHistoryController::class, 'showPracticeHistories'])->name('practice-history');
Route::get('/input-practice', [PracticeHistoryController::class, 'showInputForm'])->name('input-practice');
Route::post('/create-practice-history', [PracticeHistoryController::class, 'createPracticeHistory'])->name('create-practice-history');

Route::get('/myprofile', [MyProfileController::class, 'showMyProfile'])->name('myprofile');



require __DIR__.'/auth.php';
