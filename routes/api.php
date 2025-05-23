<?php

use Illuminate\Support\Facades\Route;
use Src\Infrastructure\Http\Controllers\GetTrackByIdController;

Route::get('/tracks/{id}', GetTrackByIdController::class)->name('api.tracks.GetTrackById');
