<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Profile; 

Route::get('/profiles',[ProfileController::class,'GetAllProfiles']);
Route::get('/profile/{id}',[ProfileController::class,'GetOneProfile']);
