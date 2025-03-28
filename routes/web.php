<?php

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

/**
 * Admin Routes
 */
Route::prefix('/admin')->name('admin.')->group(function (){
    Route::get('/dashboard', App\Livewire\Admin\Dashboard\Index::class)->name('dashboard.index');
    /** Countries */
    Route::get('/countries', \App\Livewire\Admin\Country\Index::class)->name('country.index');
    /** States */
    Route::get('/states', \App\Livewire\Admin\State\Index::class)->name('state.index');
    /** Cities */
    Route::get('/cities', \App\Livewire\Admin\City\Index::class)->name('city.index');
    Route::get('/test', \App\Livewire\Test::class)->name('country.test');
});

