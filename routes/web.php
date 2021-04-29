<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/lavoraconnoi' , [PublicController::class , 'lavoraconnoi'])->name('lavoraconnoi')->middleware('auth');
Route::post('/lavoraconnoi/submit',[PublicController::class, 'submit'])->name('lavoraconnoi.submit');


Route::get('/', [AnnouncementController::class , 'homepage'])->name('homepage');
Route::get('/announcement/create' , [AnnouncementController::class , 'create'])->name('announcement.create');
Route::post('/announcement/store' , [AnnouncementController::class , 'store'])->name('announcement.store');
Route::get('/announcement/index' , [AnnouncementController::class , 'index'])->name('announcement.index');
Route::get('/announcement/show/{announcement}' , [AnnouncementController::class , 'show'])->name('announcement.show');
Route::get('/announcement/category/{category}' , [AnnouncementController::class , 'category'])->name('announcement.category');
Route::get('/announcement/edit/{announcement}' , [AnnouncementController::class , 'edit'])->name('announcement.edit');
Route::put('/announcement/update/{announcement}' , [AnnouncementController::class , 'update'])->name('announcement.update');


Route::get('/search', [AnnouncementController::class , 'search'])->name('search');


Route::get('/revisor/homepage' , [RevisorController::class , 'index'])->name('revisor.homepage');
Route::post('/revisor/announcement/{id}/accept', [RevisorController::class , 'accept'])->name('revisor.accept');
Route::post('/revisor/announcement/{id}/reject', [RevisorController::class , 'reject'])->name('revisor.reject');

