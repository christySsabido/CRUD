<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Models\User;
use App\Models\Estudent;
use App\Models\Subject;
use App\Models\Note;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $users=User::all();
    return view('dashboard', compact('users'));


})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/usuarios', function () {
    $estudents=Estudent::paginate(10);
    return view('usuarios', compact('estudents'));

})->middleware(['auth', 'verified'])->name('usuarios');


Route::get('/asignaturas', function () {
    $asignaturs=Subject::paginate(10);
    return view('asignaturas', compact('asignaturs'));

})->middleware(['auth', 'verified'])->name('asignaturas');

Route::get('/notas', function () {
    $notes=Note::paginate(10);
    return view('notas', compact('notes'));

})->middleware(['auth', 'verified'])->name('notas');

Route::get('/bugs', function () {
    
    return view('bugs');

})->middleware(['auth', 'verified'])->name('bugs');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

require __DIR__.'/auth.php';
