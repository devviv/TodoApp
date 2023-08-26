<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\taskController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route de la page d'acceuil
Route::get('/', [taskController::class, 'index'])->name('index');
Route::get('/index', [taskController::class, 'index'])->name('index');

//Route de la page de création de nouvelle tâches
Route::get('/new', [taskController::class, 'newtask'])->name('new');

//Route de la page d'affichage des tâches
Route::get('/task', [taskController::class, 'task'])->name('task');

//Route de la page d'affichage des tâches non terminées
Route::get('/noendtasks', [taskController::class, 'noendtasks'])->name('noendtasks');

//Route de la page d'affichage des tâches terminées
Route::get('/endtasks', [taskController::class, 'endtasks'])->name('endtasks');

//Finir une tâches
Route::patch('/endtask/{task}', [taskController::class, 'endtask'])->name('endtask');

//Non finir une tâches
Route::patch('/noendtask/{task}', [taskController::class, 'noendtask'])->name('noendtask');

//Route de la page de traitement du formulaire de création de tâches
Route::post('/form', [taskController::class, 'form'])->name('form');
Route::get('/form', [taskController::class, 'newtask'])->name('formget');

//Route de la page de modification des tâches
Route::get('/tasks/{task}/edit', [taskController::class, 'edittask'])->name('edittask');
Route::put('/tasks/{task}', [taskController::class, 'updatetask'])->name('updatetask');

//Route de suppression tâches
Route::delete('/tasks/{task}', [taskController::class, 'deletetask'])->name('deletetask');

