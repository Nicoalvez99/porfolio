<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Mensaje;
use App\Models\Proyecto;
use App\Models\Stack;
use App\Http\Controllers\StackController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\MensajesController;

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
})->name('welcome');
Route::get('/sobre-mi', [StackController::class, 'index'])->name('sobreMi');

Route::get('/proyectos', [ProyectosController::class, 'index'])->name('proyectos.stack');
Route::get('/contacto', [MensajesController::class, 'index'])->name('contacto');
Route::get('/mensaje-recibido', function() {
    return view('recibido');
})->name('recibido');


Route::get('/dashboard', function () {
    $cantidad = Mensaje::get()->count();
    $cantidadProyectos = Proyecto::get()->count();
    $cantidadStacks = Stack::get()->count();
    return view('dashboard', [
        "mensaje" => $cantidad,
        "proyectos" => $cantidadProyectos,
        "stacks" => $cantidadStacks
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/mis-proyectos', [ProyectosController::class, 'indexAdmin'])->middleware(['auth', 'verified'])->name('proyectos');

Route::get('/mis-imagenes', [ImagenesController::class, 'index'])->middleware(['auth', 'verified'])->name('imagenes');

Route::get('/mi-stack', function() {
    return view('stacks');
})->middleware(['auth', 'verified'])->name('stacks');
Route::get('/mis-mensajes', [MensajesController::class, 'indexAdmin'])->name('misMensajes');

Route::post('/mi-stack', [StackController::class, 'create'])->middleware(['auth', 'verified'])->name('nuevo.stack');
Route::post('/proyectos', [ProyectosController::class, 'create'])->middleware(['auth', 'verified'])->name('nuevo.proyecto');
Route::patch('/mis-imagenes', [ImagenesController::class, 'create'])->middleware(['auth', 'verified'])->name('imagenes.proyecto');
Route::post('/contacto', [MensajesController::class, 'create'])->name('mensajes.enviar');
Route::delete('/mis-proyectos/{proyecto}', [ProyectosController::class, 'destroy'])->middleware(['auth', 'verified'])->name('proyecto.delete');
Route::delete('/mis-mensajes/{mensaje}', [MensajesController::class, 'destroy'])->middleware(['auth', 'verified'])->name('mensaje.delete');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
