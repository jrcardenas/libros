<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');})->name('dashboard');

    Route::get('/', function () {
        return view('dashboard');})->name('dashboard');
    
Route::get('/alta', function () {
    return view('auth/register');
});

require __DIR__.'/auth.php';
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/libros', 'LibroController@index')->name('libros.index');
Route::get('/libros/create','LibroController@create')->name('libros.create');
Route::post('/libros','LibroController@store')->name('libros.store');
Route::get('/libros/{id}','LibroController@show')->name('libros.show');
Route::get('/libros/{id}/edit','LibroController@edit')->name('libros.edit');
Route::post('/libros/{id}/update','LibroController@update')->name('libros.update');
Route::get('/libros/{id}/delete','LibroController@destroy')->name('libros.destroy');
*/

Route::get('/libros', [LibroController::class, 'index'])->name('libros.index');
Route::get('/libros/create',[LibroController::class, 'create'])->name('libros.create');
Route::post('/libros',[LibroController::class, 'store'])->name('libros.store');
Route::get('/libros/{id}',[LibroController::class, 'show'])->name('libros.show');
Route::get('/libros/{id}/edit',[LibroController::class, 'edit'])->name('libros.edit');
Route::put('/libros/{id}',[LibroController::class, 'update'])->name('libros.update');
Route::delete('/libros/{id}',[LibroController::class, 'destroy'])->name('libros.destroy');