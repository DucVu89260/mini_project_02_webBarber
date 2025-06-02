<?php

use App\Http\Controllers\StylistController;
use App\Http\Controllers\AuthController;
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

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'processLogin'])->name('process_login');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'processRegister'])->name('process_register');


Route::group([
   'middleware' => App\Http\Middleware\CheckLoginMiddleware::class,
], function () {
   
   Route::get('logout',[AuthController::class, 'logout'])->name('logout');

   Route::resource('stylists', StylistController::class)->except([
      'show',
      'destroy',
   ]);

   Route::group([
      'middleware' => App\Http\Middleware\CheckSuperAdminMiddleware::class,
   ], function () {
      
      Route::delete('stylists/{stylist}', [StylistController::class, 'destroy']) ->name('stylists.destroy');

   });
   
});

