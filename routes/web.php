<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Profile1Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Profile2Controller;
use App\Http\Controllers\PengalamanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Route::prefix('profile')->group(function(){
//     Route::get('/devi-andini-febrianti', [Profile1Controller::class, 'devi'])->name('devi');
//     Route::get('/roziq-mahbubi', [Profile2Controller::class, 'roziq'])->name('roziq');
// });

Route::get('profile/{slug}', [ProfileController::class, 'show'])->name('profile');

Route::get('/pengalaman-kuliah', [PengalamanController::class, 'pengalaman'])->name('pengalaman');