<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'accueil'])->name('accueil');
Route::get('/aproposdenous', [PagesController::class, 'aproposdenous'])->name('aproposdenous');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/detailsservice/{service}', [PagesController::class, 'detailsservice'])->name('detailsservice');
Route::get('/projets', [PagesController::class, 'projets'])->name('projets');
Route::get('/detailsprojet/{projet}', [PagesController::class, 'detailsprojet'])->name('detailsprojet');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
