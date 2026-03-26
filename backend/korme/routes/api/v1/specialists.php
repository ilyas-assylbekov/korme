<?php

use Illuminate\Support\Facades\Route;
use App\Domain\SpecialistHiring\Controllers\SpecialistController;

Route::post('/', [SpecialistController::class, 'store']);