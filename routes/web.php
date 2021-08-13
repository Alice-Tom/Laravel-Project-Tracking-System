<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EchartController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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
Auth::routes();

Route::get('manager/dashboard', [EchartController::class, 'echart'])->name('manager.dashboard');
Route::get('/', [IndexController::class, 'index']);
Route::get('about', [IndexController::class, 'about']);

// registration
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::get('/register/{$query::company}', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// login
Route::post('login', [LoginController::class, 'login']);

// manager
Route::get('manager/profile', [ProfileController::class, 'indexmanager'])->name('profile');
Route::post('manager/profile/update/{id}', [ProfileController::class, 'updatemanager'])->name('profileupdate');

Route::get('manager/dashboard', [ManagerController::class, 'index'])->name('manager.dashboard');
Route::get('manager/dashboard', [ManagerController::class, 'ManagerProject'])->name('manager.dashboard');
// Route::get('manager/dashboard', [ManagerController::class, 'echart']);
// Route::get('manager/dashboard', [ProgressController::class, 'ReportWriting'])->name('manager.dashboard');

Route::get('manager/view_projects', [ProjectController::class, 'ManagerProject']);
Route::get('manager/Registered Projects', [PrintController::class, 'ManagerProject'])->name('manager.print_preview_projects');
Route::get('manager/view_progress', [ProgressController::class, 'ManagerProgress']);
Route::get('manager/Project Progresses', [PrintController::class, 'ManagerProgress']);

Route::get('manager/comment/{id}', [CommentController::class, 'ManagerComment'])->name('getbyid');
Route::post('manager/comment/{id}/post', [CommentController::class, 'store'])->name('postcomment');


// employee
Route::get('employee/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('employee/profile/update/{id}', [ProfileController::class, 'update'])->name('updateprofile');

Route::get('employee/dashboard', [EmployeeController::class, 'index'])->name('employee.dashboard');;
Route::get('employee/register_project', [ProjectController::class, 'index']);
Route::post('employee/register_project', [ProjectController::class, 'store'])->name('postproject');
Route::get('/employee/deleteproject/{id}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('delete');
Route::get('employee/view_projects', [ProjectController::class, 'EmployeeProject'])->name('employee.view_projects');
Route::get('employee/Registered Projects', [PrintController::class, 'EmployeeProject'])->name('employee.print_preview_projects');

Route::get('employee/add_status/{id}', [ProgressController::class, 'index'])->name('employee.add_status');
Route::post('employee/add_status/{id}/post', [ProgressController::class, 'store'])->name('poststatus');

Route::get('employee/view_progress', [ProgressController::class, 'EmployeeProgress']);
Route::get('employee/Project Progresses', [PrintController::class, 'EmployeeProgress']);

Route::get('employee/comments', [CommentController::class, 'show'])->name('showcomments');

Route::get('employee/edit_project/{id}', [ProjectController::class, 'edit'])->name('getid');
Route::post('employee/edit_project/update&{id}', [ProjectController::class, 'update'])->name('updateproject');

Route::get('employee/edit_status/{id}', [ProgressController::class, 'edit'])->name('getid');
Route::post('employee/edit_status/update&{id}', [ProgressController::class, 'update'])->name('updatestatus');

Route::get('/home', [HomeController::class, 'index'])->name('home');
