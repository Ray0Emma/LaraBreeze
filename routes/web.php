<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;
use App\Http\Livewire\AdminDashboard;
use App\Http\Livewire\Agricultures;
use App\Http\Livewire\EditorDashboard;
use App\Http\Livewire\Employes;
use App\Http\Livewire\Intervention;
use App\Http\Livewire\Parcelles;
use App\Http\Livewire\Tarifs;
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
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get("/redirectAuthenticatedUsers", [RedirectAuthenticatedUsersController::class, "home"]);

    Route::group(['middleware' => 'checkRole:admin'], function () {
        Route::get('/adminDashboard', AdminDashboard::class)->name('dashboard');
        Route::get('/admin_agriculteur', Agricultures::class)->name('agriculteur');
        Route::get('/admin_employe', Employes::class)->name('employe');
        Route::get('/admin_parcelles', Parcelles::class)->name('parcelles');
        Route::get('/admin_tarifs', Tarifs::class)->name('tarifs');
        Route::get('/admin_intervention', Intervention::class)->name('intervention');
        Route::get('/admin_data', Agricultures::class)->name('data');
    });
    Route::group(['middleware' => 'checkRole:editor'], function () {
        Route::get('/editorDashboard', EditorDashboard::class)->name('editorDashboard');
        Route::get('/editor_agr', Agricultures::class)->name('editor_agriculteur');
        Route::get('/editor_employe', Employes::class)->name('editor_employe');
        Route::get('/editor_parcelles', Agricultures::class)->name('editor_parcelles');
        Route::get('/editor_tarifs', Agricultures::class)->name('editor_tarifs');
        Route::get('/editor_intervention', Agricultures::class)->name('editor_intervention');
        Route::get('/editor_data', Agricultures::class)->name('editor_data');
    });
    Route::group(['middleware' => 'checkRole:viewer'], function () {
        Route::get('/viewerDashboard', ViewerDashboard::class)->name('viewerDashboard');
        Route::get('/viewer_agr', Agricultures::class)->name('viewer_agriculteur');
        Route::get('/viewer_employe', Employes::class)->name('viewer_employe');
        Route::get('/viewer_parcelles', Agricultures::class)->name('viewer_parcelles');
        Route::get('/viewer_tarifs', Agricultures::class)->name('viewer_tarifs');
        Route::get('/viewer_intervention', Agricultures::class)->name('viewer_intervention');
        Route::get('/viewer_data', Agricultures::class)->name('viewer_data');
    });
});
