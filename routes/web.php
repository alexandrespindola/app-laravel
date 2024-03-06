<?php

use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{SupportController};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
