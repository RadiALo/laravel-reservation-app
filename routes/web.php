<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login',  [UserController::class, 'login_get'])->name('user.login');

Route::post('/login', [UserController::class, 'login_post'])->name('user.login.post');

Route::get('/register', [UserController::class, 'register_get'])->name('user.register');

Route::post('/register', [UserController::class, 'register_post'])->name('user.register.post');

Route::get('/logout', [UserController::class, 'logout_get'])->name('user.logout');

Route::get('/reservations', [ReservationController::class, 'reservations_get'])
    ->name('reservation.show');

Route::get('/reservations/create', [ReservationController::class, 'reservation_create_get'])
    ->name('reservation.create');

Route::post('/reservations/create', [ReservationController::class, 'reservation_create_post'])
    ->name('reservation.create.post');
