<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\admin\PanelController;

Route::get('/panel', [PanelController::class, 'index'])->name('dashboard');
