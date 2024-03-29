<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\SingleServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Dashboard_Admin', [DashboardController::class,'index']);


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 

        // ----------------- start Dashboard user ----------------------------
        Route::get('/dashboard/user', function () {
            return view('Dashboard.User.dashboard');
        })->middleware(['auth'])->name('dashboard.user');
        // ------------------End user Dashboard -------------------------------

        // ------------------Start admin Dashboard ----------------------------
        Route::get('/dashboard/admin', function () {
            return view('Dashboard.Admin.dashboard');
        })->middleware(['auth:admin'])->name('dashboard.admin');
        // ------------------ End admin Dashboard ------------------------------
        
        // ----------------------------------------------------------
        Route::middleware(['auth:admin'])->group(function(){

            // --------------- start sections route -----------------------
            Route::resource('sections', SectionController::class);
            // --------------- End sections route -------------------------

            // --------------- start doctor route -----------------------
            Route::resource('Doctors', DoctorController::class);
            Route::post('update_password', [DoctorController::class, 'update_password'])->name('update_password');
            Route::post('update_status', [DoctorController::class, 'update_status'])->name('update_status');
            // --------------- End doctor route -------------------------

            // --------------- Start services route -------------------------
            Route::resource('Service', SingleServiceController::class);

            // --------------- Group services route -------------------------
            Route::view('Add_GroupServices','livewire.GroupServices.include_create')->name('Add_GroupServices');

            // --------------- End services route -------------------------

        });
        
        
        
        require __DIR__.'/auth.php';

    });




