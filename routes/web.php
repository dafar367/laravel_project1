<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\courseController;
use App\Http\Controllers\ProjectResourceController;
use App\Models\project;
use App\Models\course;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'home']);

Route::get('/contact', [Controller::class, 'contact']);

// Route::get('/myproject', [projectController::class, 'indexProject']);

// Route::get('/createProject', [projectController::class, 'createProject']);

// Route::get('/myproject/{code}', [projectController::class,'show']);

Route::resource('/myproject', ProjectResourceController::class);

Route::get('/courseproject', [courseController::class, 'indexCourse']);

Route::get('/courseproject/{code}', [courseController::class,'show']);