<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;

Route::get('/', [PostController::class, 'index']);
