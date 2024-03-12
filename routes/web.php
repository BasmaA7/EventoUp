<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StatistiqueController;
use App\Http\Controllers\TicketController;
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
    Route::patch('/reservation/accept/{reservation}', [ReservationController::class, 'acceptReservation'])->name('acceptReservation');
    Route::patch('/reservation/refuse/{reservation}', [ReservationController::class, 'refuseReservation'])->name('refuseReservation');
    // Route::get('/organize',  [RegisterController::class, 'showRegistrationForm'])->name('showRegistrationForm');
    Route::post('/changeRole',  [ProfileController::class, 'changeRole'])->name('changeRole');
    Route::post('/organize',  [RegisterController::class, 'registerStore'])->name('registerStore');
    Route::post('/reserve/{event}', [ReservationController::class , 'reserve'])->name("reserve");

    Route::get('/event/create',[EventController::class,'create'])->name('event.create');
    Route::get('/my_event',[EventController::class,'index'])->name('my_event');
    Route::get('/ManageTickets',[ReservationController::class,'index'])->name('ManageTickets');
    Route::get('/event/edit/{event}',[EventController::class,'edit'])->name('event.edit');
    Route::post('/event/edit',[EventController::class,'update'])->name('event.update');
    Route::delete('/event/delete/{event}', [EventController::class, 'destroy'])->name('destroy');


    Route::get('/event/create',[EventController::class,'create'])->name('event.create');
    Route::post('/event/create',[EventController::class,'store'])->name('event.store');
    Route::get('/dashboard', [EventController::class,'index'])->name('dashboard');
    Route::get('/home',[HomeController::class,'index'])->name('home');

// Route::get('/editevent/{event}', [EventController::class, 'edit'])->name('edit');
// Route::put('/editevent/{event}', [EventController::class, 'update'])->name('event.update');
// Route::delete('/delatevent/{event}', [EventController::class, 'destroy'])->name('destroy');
    Route::resource('categories', CategoryController::class);
    Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.ticket');
    Route::get('/search', [EventController::class, 'search'])->name('search');




Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/event',[EventController::class,'AdminDash'])->name('AdminDash');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('statistique',[StatistiqueController::class,'index'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
