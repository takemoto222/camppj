<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampController;


Route::get('/', [CampController::class, 'index']);