<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CMS\CMSTraditionalController;
use App\Http\Controllers\CMS\CMSProjectsController;
use App\Http\Controllers\CMS\CMSActivitiesController;

#TradiCMS
Route::get('CMS/traditional_room',[CMSTraditionalController::class,'index']);
Route::get('CMS/traditional_room/edit/{tradiID}', [CMSTraditionalController::class,'edit']);
Route::get('/CMS/traditional_room/create', [CMSTraditionalController::class,'create']);
Route::post('/CMS/traditional_room/store', [CMSTraditionalController::class,'store']);
Route::get('/CMS/traditional_room/{tradiID}', [CMSTraditionalController::class,'show']);
Route::DELETE('/CMS/traditional_room/destroy/{tradiID}', [CMSTraditionalController::class,'destroy']);
Route::patch('CMS/traditional_room/update/{tradiID}',[CMSTraditionalController::class,'update']);

#ProjectsCMS
Route::get('CMS/projects',[CMSProjectsController::class,'index']);
Route::get('CMS/projects/edit/{projectID}', [CMSProjectsController::class,'edit']);
Route::get('/CMS/projects/create', [CMSProjectsController::class,'create']);
Route::post('/CMS/projects/store', [CMSProjectsController::class,'store']);
Route::get('/CMS/projects/{projectID}', [CMSProjectsController::class,'show']);
Route::DELETE('/CMS/projects/destroy/{projectID}', [CMSProjectsController::class,'destroy']);
Route::patch('CMS/projects/update/{projectID}',[CMSProjectsController::class,'update']);

#ActivitiesCMS
Route::get('CMS/activities',[CMSActivitiesController::class,'index']);
Route::get('CMS/activities/edit/{actID}', [CMSActivitiesController::class,'edit']);
Route::get('/CMS/activities/create', [CMSActivitiesController::class,'create']);
Route::post('/CMS/activities/store', [CMSActivitiesController::class,'store']);
Route::get('/CMS/activities/{actID}', [CMSActivitiesController::class,'show']);
Route::DELETE('/CMS/activities/destroy/{actID}', [CMSActivitiesController::class,'destroy']);
Route::patch('CMS/activities/update/{actID}',[CMSActivitiesController::class,'update']);