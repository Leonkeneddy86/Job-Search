<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferControllers;

    Route::get('/', [OfferControllers::class, 'index'])->name('home');
    
