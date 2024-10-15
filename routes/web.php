<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncidentsController;
use App\Http\Controllers\InvestigationController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/',[HomeController::class,"index"]);
Route::get('/about',[AboutController::class,"index"]);
Route::get('/services',[ServicesController::class,"index"]);

Route::get('/contact',[ContactController::class,"index"]);


Route::get('/portfolio',[PortfolioController::class,"index"]);
Route::get('/dashboard',[DashboardController::class,"index"]);


// incidents
Route::get('/dashboard/admin/incidents',[IncidentsController::class,"index"])->name('dashboard.admin.incidents.index');
Route::get('/dashboard/admin/incidents/add',[IncidentsController::class,"add"]);
Route::post('/dashboard/admin/incidents/store', [IncidentsController::class, 'store'])->name('dashboard.admin.incidents.store');
Route::get('/dashboard/admin/incidents/delete/{id}',[IncidentsController::class,"delete"]);



Route::get('/dashboard/admin/investigations',[InvestigationController::class,"index"])->name('dashboard.admin.investigations.index');
Route::get('/dashboard/admin/investigations/add',[InvestigationController::class,"add"]);
Route::post('/dashboard/admin/investigations/store', [InvestigationController::class, 'store'])->name('dashboard.admin.investigations.store');
Route::get('/investigations/{id}/report', [InvestigationController::class, 'viewReport'])->name('dashboard.admin.investigations.viewReport');
Route::get('/investigations/{id}/attachment/{filename}', [InvestigationController::class, 'viewAttachment'])->name('dashboard.admin.investigations.viewAttachment');
Route::get('dashboard/admin/investigations/{id}', [InvestigationController::class, 'show'])->name('dashboard.admin.investigations.show');
Route::get('/dashboard/admin/investigations/delete/{id}', [InvestigationController::class, 'delete'])
    ->name('dashboard.admin.investigations.delete');

Route::get('/dashboard/admin/investigations/edit/{id}', [InvestigationController::class, 'edit'])
    ->name('dashboard.admin.investigations.edit');

Route::put('/dashboard/admin/investigations/update/{id}', [InvestigationController::class, 'update'])
    ->name('dashboard.admin.investigations.update');



Route::get('/dashboard/admin/role', [RoleController::class, 'index'])->name('dashboard.admin.role.index');
Route::get('/dashboard/admin/role/add', [RoleController::class, 'add'])->name('dashboard.admin.role.add');
Route::post('/dashboard/admin/role/store', [RoleController::class, 'store'])->name('dashboard.admin.role.store');
Route::get('/dashboard/admin/role/edit/{id}', [RoleController::class, 'edit'])->name('dashboard.admin.role.edit');
Route::post('/dashboard/admin/role/update/{id}', [RoleController::class, 'update'])->name('dashboard.admin.role.update'); // Change to post
Route::delete('/dashboard/admin/role/delete/{id}', [RoleController::class, 'delete'])->name('dashboard.admin.role.delete');


