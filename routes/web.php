<?php

use App\Http\Controllers\BarangayController;
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

Route::get('/import', [FP_RecordController::class, 'index'])->name('test');
Route::post('/import', [FP_RecordController::class, 'import'])->name('import');
