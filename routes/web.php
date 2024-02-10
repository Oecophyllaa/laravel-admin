<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\TableMasterController as AdminTableMasterController;

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
	return view('welcome');
});

Auth::routes();

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {

	// DASHBOARD
	Route::get('/', [AdminDashboardController::class, 'index'])->name('index');
	Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

	// ADMIN PROFILE
	Route::get('/profile', [AdminDashboardController::class, 'profile'])->name('profile');
	Route::put('/profile/update', [AdminDashboardController::class, 'profileUpdate'])->name('profile.update');

	// TABLE MASTER
	Route::resource('table-master', AdminTableMasterController::class);
});
