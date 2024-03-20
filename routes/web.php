<?php


use RealRashid\SweetAlert\Facades\Alert;


use App\Http\Controllers\clientcontroller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


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

Route::get('/', function () {
    Alert::success('Success Title', 'Success Message');

    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/getclients',[clientcontroller::class,'getclient']);
Route::get('/test1',[App\Http\Controllers\TestController::class,'test1'])->name('test1');
Route::get('/test',[App\Http\Controllers\TestController::class,'test'])->name('test');



Route::get('/form/index', [FormController::class, 'index'])->name('form.index');
Route::get('/form/create', [FormController::class, 'create'])->name('form.create');
Route::post('/form/store', [FormController::class, 'store'])->name('form.store');
Route::get('{id}/form/edit', [FormController::class, 'edit'])->name('form.edit');
Route::get('{id}/form/view', [FormController::class, 'view'])->name('form.view');
Route::get('{id}/form/delete', [FormController::class, 'delete'])->name('form.delete');
Route::put('{id}/form/update', [FormController::class, 'update'])->name('form.update');
Route::get('/form/restore', [FormController::class, 'restore'])->name('form.restore');
Route::post('/form/restore/{id}', [FormController::class, 'restores'])->name('form.restores');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
