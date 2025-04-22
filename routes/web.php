<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'accueil'])->name('accueil');
Route::get('/aproposdenous', [PagesController::class, 'aproposdenous'])->name('aproposdenous');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/projets', [PagesController::class, 'projets'])->name('projets');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
