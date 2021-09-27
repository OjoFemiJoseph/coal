<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    projectController,
    taskController,
};

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
    return view('welcome');
});

Route::prefix('projects')
    ->name('projects.')
    ->group(function(){

        Route::get('/create',[projectController::class,'create'])->name('create');
        Route::get('/edit/{pro}',[projectController::class,'edit'])->name('edit');
        Route::get('/',[projectController::class,'index'])->name('index');

        Route::post('/store',[projectController::class,'store'])->name('store');

        Route::put('/update/{pro}',[projectController::class,'update'])->name('update');
        Route::delete('/{pro}',[projectController::class,'destroy'])->name('destroy');

    });

// Route::resource was intentional not used, showing the good and te bad for each segment
Route::get('projects/{pro}',[projectController::class,'list'])->name('tasks.list');
Route::post('/tasks/create',[taskController::class,'create'])->name('tasks.create');
Route::get('/tasks/edit/{pro}',[taskController::class,'edit'])->name('tasks.edit');
Route::post('/tasks/store',[taskController::class,'store'])->name('tasks.store');
Route::put('/tasks/update/{pro}',[taskController::class,'update'])->name('tasks.update');
Route::delete('/tasks/{pro}',[taskController::class,'destroy'])->name('tasks.destroy');
