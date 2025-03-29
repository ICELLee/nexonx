<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;

Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

Route::get('/', function () {
    return view('pages.home.index');
})->name('home');

Route::get('/cheats', function () {
    return view('pages.cheats.index');
})->name('cheats');

Route::get('/reports', function () {
    return view('pages.reports.index');
})->name('reports');

Route::get('/items', function () {
    return view('pages.items.index');
})->name('items');

Route::get('/middleman', function () {
    return view('pages.middleman.index');
})->name('middleman');

Route::get('/friendfinder', function () {
    return view('pages.friendfinder.index');
})->name('friendfinder');
