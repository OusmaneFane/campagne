<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TwoFactorController;
use App\Http\Controllers\Auth\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route de base
Route::get('/', function () {
    return view('welcome');
})->name('login');

// Route de connexion
Route::post('/check', [LoginController::class, 'check']);

Auth::routes();
Route::middleware(['2fa'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/2fa', function () {
        return redirect(route('homesite'));
    })->name('2fa');
});
Route::get('/complete-registration', [RegisterController::class, 'completeRegistration'])->name('complete.registration');
Route::get('/homesite', [App\Http\Controllers\HomeController::class, 'index2'])->name('homesite');

Route::get('/logout', [LoginController::class, 'logout']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['list'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/benef', [DashboardController::class, 'benef'])->name('benef');
    Route::get('/campagne', [DashboardController::class, 'campagne'])->name('campagne');
    Route::get('/organe',  [DashboardController::class, 'organe'])->name('organe');
    Route::post('/add_organe',  [DashboardController::class, 'add_organe'])->name('add_organe');
    Route::get('/zone', [DashboardController::class, 'zone'])->name('zone');
    Route::post('/add_zone', [DashboardController::class, 'add_zone'])->name('add_zone');
    Route::get('/distrib', [DashboardController::class, 'distrib'])->name('distrib');
    Route::post('/add_distrib', [DashboardController::class, 'add_distrib'])->name('add_distrib');
    Route::post('/add_campagne', [DashboardController::class, 'add_campagne'])->name('add_campanne');
    Route::post('/add_benef', [DashboardController::class, 'add_benef'])->name('add_benef');
    Route::get('/campagne/{id}/edit', [DashboardController::class, 'edit_campagne'])->name('edit_campagne');
    Route::post('/store_benef', [DashboardController::class, 'store_benef'])->name('store_benef');
    Route::get('/info_zone', [DashboardController::class, 'info_zone'])->name('info_zone');
    Route::get('/info_distrib', [DashboardController::class, 'info_distrib'])->name('info_distrib');
    Route::get('/info_campagne', [DashboardController::class, 'info_campagne'])->name('info_campagne');
    Route::get('/info_organe', [DashboardController::class, 'info_organe'])->name('info_organe');
    Route::get('/distrib/{id}/edit', [DashboardController::class, 'edit_distrib'])->name('edit_distrib');
    Route::put('/distrib/{id}', [DashboardController::class, 'update_distrib'])->name('update_distrib');
    // import beneficiaire

    Route::post('/import_file', [DashboardController::class, 'import']);
//update beneficiaire
Route::put('beneficiaires/{beneficiaire}', [DashboardController::class, 'update'])->name('beneficiaires.update');


});

