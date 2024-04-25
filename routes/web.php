<?php

use App\Http\Controllers\BarangayController;
use App\Http\Controllers\Child_CareController;
use App\Http\Controllers\FP_RecordController;
use App\Http\Controllers\MunicipalityController;
use App\Imports\BarangayImport;
use App\Models\Municipality;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::get('/fprecord', [FP_RecordController::class, 'index'])->name('fprecord');
Route::post('/fprecord', [FP_RecordController::class, 'store'])->name('fprecord');

Route::get('/childcare', [Child_CareController::class, 'index'])->name('childcare');
Route::post('/childcare', [Child_CareController::class, 'store'])->name('childcare');


