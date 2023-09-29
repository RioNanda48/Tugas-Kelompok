<?php

use App\Http\Controllers\CosplayerController;
use App\Http\Controllers\OutfitController;
use App\Http\Controllers\RentsController;
use Illuminate\Support\Facades\Route;

Route::get('Cosplayer', [CosplayerController::class, 'index']);
Route::get('/', [OutfitController::class, 'index']);
Route::get('Rents', [RentsController::class, 'index']);
