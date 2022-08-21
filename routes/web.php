<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::resource('cursos', CursoController::class);

// Route::get('/', HomeController::class);

// Route::get("cursos", [CursoController::class, 'index'])->name('cursos.index');

// Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

// //segun el metodo va a entrar en esta ruta o en la que es igual pero con get
// Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

// Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

// Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

// Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

// Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

// Route::controller(CursoController::class)->group(function(){
//     Route::get("cursos", 'index');
//     Route::get('cursos/create', 'create');
//     Route::get("cursos/{curso}", 'show');
// });

// Route::get("cursos/{curso}/{categoria?}", function($curso, $categoria = null){
//     if($categoria){
//         return "Bienvenido al curso $curso, de la categoria $categoria";
//     }else{
//         return "Bienvenido al curso: $curso";
//     }
// });
