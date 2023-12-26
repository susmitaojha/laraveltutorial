<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/flot_page', [App\Http\Controllers\HomeController::class, 'flot_page'])->name('flot');
Route::get('/add_datapost', [App\Http\Controllers\HomeController::class, 'add_datapost'])->name('add_data');
Route::post('/add_datapost', [App\Http\Controllers\HomeController::class, 'add_datapost'])->name('add_data.success');


Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index']) -> name('category.list');
Route::post('/category', [App\Http\Controllers\CategoryController::class, 'index']) -> name('category.post');


Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index']) -> name('customer.list');
Route::get('/customer-add', [App\Http\Controllers\CustomerController::class, 'add']) -> name('customer.add');
Route::post('/customer-add', [App\Http\Controllers\CustomerController::class, 'add']) -> name('customer.add.success');

Route::get('/customer-update/{id}', [App\Http\Controllers\CustomerController::class, 'update']) -> name('customer.update');
Route::post('/customer-update', [App\Http\Controllers\CustomerController::class, 'update']) -> name('customer.update.success');

Route::get('/customer-info', [App\Http\Controllers\AddressController::class, 'index']) -> name('AddressController.list');
Route::get('/add-customer-info', [App\Http\Controllers\AddressController::class, 'add']) -> name('AddressController.add');
Route::post('/add-customer-info', [App\Http\Controllers\AddressController::class, 'add']) -> name('AddressController.add.success');

Route::get('/update-customer-info/{id}', [App\Http\Controllers\AddressController::class, 'update']) -> name('AddressController.update');

Route::post('/update-customer-info', [App\Http\Controllers\AddressController::class, 'update']) -> name('AddressController.update.success');
Route::get('/address-delete/{id}', [App\Http\Controllers\AddressController::class, 'delete']) -> name('AddressController.delete');


Route::get('/customer-delete/{id}', [App\Http\Controllers\CustomerController::class, 'delete']) -> name('customer.delete');
