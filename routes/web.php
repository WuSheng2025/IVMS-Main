<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\VisitsController;

Route::get('/', function () {
    return view('welcome');
});

// ================================ CLIENTS ============================

//ADD-ONCE
Route::get('/tcl/add-once',[ClientsController::class,'store']);
Route::post('/tcl/add', [ClientsController::class, 'storeOnce'])->name('tcl.add');

//ADD-BULK

//EDIT
Route::get('/tcl/{id}/edit',[ClientsController::class,'edit'])->name('client.edit');
Route::put('/tcl/{id}/update',[ClientsController::class,'update'])->name('client.update');

//SHOW
Route::get('/tcl/all',[ClientsController::class,'showClients'])->name('client.show');

//DESTROY
Route::delete('/tcl/{id}', [ClientsController::class, 'destroy'])->name('client.destroy');

// ================================ VISITS ============================
//ADD
Route::get('/visit/add', [VisitsController::class, 'create']); 
Route::post('/visit/add-save', [VisitsController::class, 'storeVisit'])->name('visit.add');

//SHOW
Route::get('/visit/all',[VisitsController::class,'showVisits'])->name('visit.show');
//EDIT
Route::get('/visit/{id}/edit',[VisitsController::class,'editVisit'])->name('visit.edit');
Route::put('/visit/{id}/update',[VisitsController::class,'updateVisit'])->name('visit.update');
//DESTROY
Route::delete('/visit/{id}', [VisitsController::class, 'destroyVisit'])->name('visit.destroy');