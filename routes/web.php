<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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
Route::get('/showevent/{id}',[EventController::class, 'ShowEvents'])->name('showevent');

Route::patch('/event/accept/{event}', [EventController::class, 'accept'])->name('accept');
Route::patch('/event/refuse/{event}', [EventController::class, 'refuse'])->name('refuse');
Route::get('/organize',  [RegisterController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/organize',  [RegisterController::class, 'registerStore'])->name('registerStore');
Route::post('/reserve/{event}', [ProfileController::class , 'reserve'])->name("reserve");

// Route::get('/addevent',[EventController::class,'create'])->name('create');
// Route::post('/addevent', [EventController::class, 'store'])->name('create');
// Route::get('/dashboard', [EventController::class,'index'])->name('dashboard');
Route::resource('event', EventController::class);
// Route::get('/editevent/{event}', [EventController::class, 'edit'])->name('edit');
// Route::put('/editevent/{event}', [EventController::class, 'update'])->name('event.update');
// Route::delete('/delatevent/{event}', [EventController::class, 'destroy'])->name('destroy');
Route::resource('categories', CategoryController::class);


Route::get('home',[HomeController::class,'index']);
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
