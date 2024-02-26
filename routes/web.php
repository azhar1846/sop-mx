<?php

use App\Http\Controllers\AdminPortalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PatientController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Models\User;


Route::get('/', function () {
   return redirect('/login');
});



Route::middleware('auth')->group(function () {


    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::controller(UserController::class)->prefix('user')->group(function () {
        Route::get('get-user', 'loginUser')->name('users.loginUser');

    });

    Route::controller(PatientController::class)->prefix('patients')->group(function () {
        Route::get('index', 'index')->name('patients.index');
        Route::get('landing-page/{id}', 'landingPage')->name('landing-page');

    });

    Route::controller(AdminPortalController::class)->prefix('admin')->group(function () {
        Route::get('index', 'index')->name('admin.index');

    });

    Route::controller(PanelController::class)->prefix('panel')->group(function () {
        Route::get('index', 'index')->name('panel.index');
        Route::get('draft', 'draft')->name('panel.draft');
    });

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::controller(ProjectController::class)->prefix('projects')->group(function () {
    //     Route::get('/create', 'create')->name('projects.create');
    //     Route::get('index', 'index')->name('projects.index');
    //     Route::put('/update/{id}', 'update');
    //     Route::delete('/delete/{id}', 'delete');
    //     Route::post('/create', 'store');
    // });

    // // Team
    // Route::controller(TeamController::class)->prefix('teams')->group(function () {
    //     Route::post('/create', 'store');
    // });
});



require __DIR__ . '/auth.php';
