<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

// Route::get('/biodata', function () {
//     return view('biodata');
// });

route::middleware(['auth'])->group(function () {


Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata.index');
Route::get('/biodata/create', [BiodataController::class, 'create'])->name('biodata.create'); //name biodata.create harus sama dengan di view
Route::post('/biodata', [BiodataController::class, 'store'])->name('biodata.store');
Route::get('/biodata/{id}/edit', [BiodataController::class, 'edit'])->name('biodata.edit');
Route::put('/biodata/{id}', [BiodataController::class, 'update'])->name('biodata.update');
Route::delete('/biodata/{id}', [BiodataController::class, 'delete'])->name('biodata.delete');


Route::get('/obat', [ObatController::class, 'index'])->name('obat.index');
Route::get('/obat/create', [ObatController::class, 'create'])->name('obat.create'); //name biodata.create harus sama dengan di view
Route::post('/obat', [ObatController::class, 'store'])->name('obat.store');
Route::get('/obat/{id}/edit', [ObatController::class, 'edit'])->name('obat.edit');
Route::put('/obat/{id}', [ObatController::class, 'update'])->name('obat.update');
Route::delete('/obat/{id}', [ObatController::class, 'delete'])->name('obat.delete');


Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create'); //name biodata.create harus sama dengan di view
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'delete'])->name('user.delete');

});

//untuk login, redirect ke auth loginController. setelah login ke view/biodata
Auth::routes([
    'register'=> 'false',
    'reset'=> 'false',
    'verify'=> 'false',
]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
