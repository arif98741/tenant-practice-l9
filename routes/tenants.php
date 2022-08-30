<?php

use App\Models\tenants\Note;
use Illuminate\Support\Facades\Route;
Route::get('/hello', [\App\Http\Controllers\HomeController::class,'tentAnt']);
