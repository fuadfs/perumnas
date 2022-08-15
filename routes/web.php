<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/',[GuestController::class,'index'])->name('index');
route::get('/redirect',[HomeController::class,'redirect']);
route::get('/contact',[GuestController::class,'contact'])->name('contact');
route::get('/news',[GuestController::class,'news'])->name('news');
route::get('/news-details',[GuestController::class,'newsDetail'])->name('news-details');
route::get('/complaint',[GuestController::class,'complaint'])->name('complaint');
route::get('/project-details',[GuestController::class,'projectDetail'])->name('project-details');

route::get('/search',[GuestController::class,'searchData'])->name('serach');

route::get('/unit',[GuestController::class,'unit'])->name('unit');
route::get('/unit-details/{id}',[GuestController::class,'unitDetail'])->name('unit-details');

route::get('/admin-dashboard',[AdminController::class,'adminDashboard'])->name('admin-dashboard');

route::get('/admin-unit',[AdminController::class,'adminUnit'])->name('admin-unit');
route::get('/admin-add-unit',[AdminController::class,'addUnitPage'])->name('admin-add-unit');
route::post('/add-unit',[AdminController::class,'addUnit'])->name('add-unit');
route::get('/delete-unit/{id}',[AdminController::class,'deleteUnit'])->name('delete-unit');
route::post('/update-unit/{id}',[AdminController::class,'updateUnit'])->name('update-unit');
route::get('/admin-update-unit/{id}',[AdminController::class,'updateUnitPage'])->name('admin-update-unit');

route::get('/admin-project',[AdminController::class,'adminProject'])->name('admin-project');
route::get('/admin-add-project',[AdminController::class,'addProjectPage'])->name('admin-add-project');
route::post('/add-project',[AdminController::class,'addProject'])->name('add-project');
route::get('/delete-project/{id}',[AdminController::class,'deleteProject'])->name('delete-project');
route::post('/update-project/{id}',[AdminController::class,'updateProject'])->name('update-project');
route::get('/admin-update-project/{id}',[AdminController::class,'updateProjectPage'])->name('admin-update-project');

