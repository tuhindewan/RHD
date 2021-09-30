<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyTypeController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'landing']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/asset-statement', [PropertyController::class, 'index'])->name('statement');
Route::post('/', [PropertyController::class, 'store'])->name('statement.store');
Route::get('/asset-statement-view', [PropertyController::class, 'view'])->name('view');

//property type
Route::prefix('property')->group(function() {
    Route::get('/types', [PropertyTypeController::class, 'index'])
            ->name('type.index');
    Route::get('/type/create', [PropertyTypeController::class, 'create'])->name('type.create');
    Route::post('/type', [PropertyTypeController::class, 'store'])->name('type.store');
    Route::get('/type/edit/{type}', [PropertyTypeController::class, 'edit'])->name('type.edit');
});
