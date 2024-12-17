<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::resource('crud_app_db', PostController::class);