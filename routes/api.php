<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferControllers;
use App\Http\Controllers\api\OfferController;
Route::get("/Offer",[OfferController::class,"index"])->name("apihome");
Route::post("/Offer",[OfferController::class,"store"])->name("apistore");



