<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UpazilaController;
use App\Http\Controllers\VaccinationCenterController;
use App\Http\Controllers\VaccineController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
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

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories',CategoryController::class);
    Route::resource('people', PeopleController::class);
    Route::post('/people-registered-unregistered/{id}', [PeopleController::class, 'registeredUnregistered'])->name('people-registered-unregistered');
    Route::resource('divisions', DivisionController::class);
    Route::post('/divisions-enable-disable/{id}', [DivisionController::class, 'enableDisable'])->name('divisions-enable-disable');
    Route::resource('districts', DistrictController::class);
    Route::resource('upazilas', UpazilaController::class);
    Route::resource('vaccines', VaccineController::class);
    Route::post('/vaccines-enable-disable/{id}', [VaccineController::class, 'enableDisable'])->name('vaccines-enable-disable');
    Route::resource('vaccination-centers', VaccinationCenterController::class);
    Route::resource('registration', RegistrationController::class);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
