<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;
use App\Http\Livewire\AdminDashboard;
use App\Http\Livewire\EditorDashboard;
use App\Http\Livewire\ViewerDashboard;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get("/redirectAuthenticatedUsers", [RedirectAuthenticatedUsersController::class, "home"]);

    Route::group(['middleware' => 'checkRole:admin'], function () {
        Route::get('/adminDashboard', AdminDashboard::class)->name('adminDashboard');
    });
    Route::group(['middleware' => 'checkRole:editor'], function () {
        Route::get('/editorDashboard', EditorDashboard::class)->name('editorDashboard');
    });
    Route::group(['middleware' => 'checkRole:viewer'], function () {
        Route::get('/viewerDashboard', ViewerDashboard::class)->name('viewerDashboard');
    });
});
