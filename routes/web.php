<?php

use App\Http\Controllers\site\BrandsController;
use App\Http\Controllers\site\HomeControllers;
use App\Http\Controllers\site\ServiceController;
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

Route::namespace('site')->group(function() {
   
    // Home
    Route::get('/', [HomeControllers::class, 'index'])->name('site.home');

    // Serviços
    Route::get('service', [ServiceController::class, 'service'])->name('site.service');

    // Marcas
    Route::get('marcas', [BrandsController::class, 'brands'])->name('site.brands');
   
});
