<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\View\TraditionalController;
use App\Http\Controllers\View\ProjectsController;
use App\Http\Controllers\View\ActivitiesController;


Route::get('/humans',[TraditionalController::class,'index']);
Route::get('/project',[ProjectsController::class,'index']);
Route::get('/activity',[ActivitiesController::class,'index']);

