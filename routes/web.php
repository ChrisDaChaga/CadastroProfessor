<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\PermanenciaController;

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
Route::get('/', [IndexController::class, 'index'])->name('home');
//Route::get('/', function () {
  //  return view('index');
//})->name('home');

//Route::get('/horarios', function () {
    //return view('listagemPermanencias');
//})->name('horarios');


Route::get('/listagemMaterias', [MateriaController::class, 'listar']);
Route::get('/listagemMaterias/novo', [MateriaController::class, 'novo']);
Route::post('/listagemMaterias/salvar', [MateriaController::class, 'salvar'])->name('listagemMaterias.salvar');
Route::get('/listagemMaterias/editar/{id}', [MateriaController::class, 'editar']);
Route::get('/listagemMaterias/excluir/{id}', [MateriaController::class, 'excluir']);



Route::get('/listagemProfessores', [ProfessorController::class, 'listar']);
Route::get('/listagemProfessores/novo', [ProfessorController::class, 'novo']);
Route::post('/listagemProfessores/salvar', [ProfessorController::class, 'salvar'])->name('listagemProfessores.salvar');
Route::get('/listagemProfessores/editar/{id}', [ProfessorController::class, 'editar']);
Route::get('/listagemProfessores/excluir/{id}', [ProfessorController::class, 'excluir']);


Route::get('/listagemPermanencias', [PermanenciaController::class, 'listar']);
Route::get('/listagemPermanencias/novo', [PermanenciaController::class, 'novo']);
Route::post('/listagemPermanencias/salvar', [PermanenciaController::class, 'salvar'])->name('listagemPermanencias.salvar');
Route::get('/listagemPermanencias/editar/{id}', [PermanenciaController::class, 'editar']);
Route::get('/listagemPermanencias/excluir/{id}', [PermanenciaController::class, 'excluir']);