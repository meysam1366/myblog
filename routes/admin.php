<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\admin\PanelController;
use \App\Http\Controllers\admin\LanguageController;
use \App\Http\Controllers\admin\CategoryController;

Route::get('panel', [PanelController::class, 'index'])->name('dashboard');
Route::resource('languages', LanguageController::class);
Route::resource('categories', CategoryController::class);
