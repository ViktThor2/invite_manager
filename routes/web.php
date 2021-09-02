<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');


// Admin
use App\Http\Controllers\LoginController;
use App\Http\Controllers\{CostumerController, CostumerInviteController};
use App\Http\Controllers\{HouseController, SearchController};

Route::get('/admin/login', [LoginController::class, 'create'])->name('admin.login');
Route::post('/admin//login', [LoginController::class, 'store'])->name('admin.login.store');
Route::get('admin//logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::middleware('admin_check_login')->group(function () {

  Route::resource('/costumer', CostumerController::class);
  Route::get('costumers/list', [CostumerController::class, 'getCostumers'])->name('costumers.list');

  Route::get('/invite', [CostumerInviteController::class, 'index'])->name('invite');
  Route::post('/invite', [CostumerInviteController::class, 'send'])->name('invite.send');
  Route::get('/invite/create/{id}', [CostumerInviteController::class, 'create'])->name('invite.create');
  Route::post('/invite/store/{id}', [CostumerInviteController::class, 'store'])->name('invite.store');

    Route::get('/house/admin', [HouseController::class, 'admin'])->name('house.admin');
    Route::get('house/list', [HouseController::class, 'getHouse'])->name('house.list');

  Route::resource('/search', SearchController::class);

});


// Costumer
use App\Http\Controllers\CostumerLoginController;

Route::get('/login', [CostumerLoginController::class, 'create'])->name('login');
Route::post('/login', [CostumerLoginController::class, 'store'])->name('login.store');
Route::get('/logout', [CostumerLoginController::class, 'logout'])->name('logout');

Route::middleware('check_login')->group(function () {

    Route::resource('/house', HouseController::class);
    Route::resource('/search', SearchController::class);

});
