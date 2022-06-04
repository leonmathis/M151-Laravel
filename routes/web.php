<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\ControllerController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/shoes', function () {
    return view('shoes');
})->middleware('auth');

Route::get('/controllers', function () {
    return view('controllers');
})->middleware('auth');

Route::get('/adidas', function () {
    return view('adidas');
})->middleware('auth');

Route::get('/jordan', function () {
    return view('jordan');
})->middleware('auth');

Route::get('/xbox', function () {
    return view('xbox');
})->middleware('auth');

Route::get('/playstation', function () {
    return view('playstation');
})->middleware('auth');

Route::get('/edit', function () {
    return view('edit');
})->middleware('auth');

Route::get('/like', [ControllerController::class , 'index'])->middleware('auth');

Route::get('/edit', [ShoeController::class , 'edit'])->middleware('auth');
Route::put('/edit', [ShoeController::class , 'update']);

Route::post('/jordan', [ShoeController::class , 'like']);
Route::post('/adidas', [ShoeController::class , 'like']);

Route::post('/playstation', [ControllerController::class , 'like']);
Route::post('/xbox', [ControllerController::class , 'like']);

Route::delete('/like/cont/{controllerId}', [ControllerController::class, 'delete'])->middleware('auth');
Route::delete('/like/shoe/{shoeId}', [ShoeController::class, 'delete'])->middleware('auth');

Route::get('/admin', [AdminController::class , 'index'])->middleware(['auth', 'adminauth']);

Route::delete('/admin/cont/{controllerId}', [AdminController::class, 'deleteCont'])->middleware(['auth', 'adminauth']);
Route::delete('/admin/shoe/{shoeId}', [AdminController::class, 'deleteShoe'])->middleware(['auth', 'adminauth']);
Route::delete('/admin/user/{userId}', [AdminController::class, 'deleteUser'])->middleware(['auth', 'adminauth']);

Route::get('/admin/controller/edit/{controllerId}', [AdminController::class , 'editController'])->middleware(['auth', 'adminauth']);
Route::get('/admin/shoe/edit/{shoeId}', [AdminController::class , 'editShoe'])->middleware(['auth', 'adminauth']);
Route::get('/admin/user/edit/{userId}', [AdminController::class , 'editUser'])->middleware(['auth', 'adminauth']);

Route::put('/admin/controller/edit/{controllerId}', [AdminController::class , 'updateController'])->middleware(['auth', 'adminauth']);
Route::put('/admin/shoe/edit/{shoeId}', [AdminController::class , 'updateShoe'])->middleware(['auth', 'adminauth']);
Route::put('/admin/user/edit/{userId}', [AdminController::class , 'updateUser'])->middleware(['auth', 'adminauth']);