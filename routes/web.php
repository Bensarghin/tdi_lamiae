<?php
use App\Http\Controllers\Client_Controller;
use App\Http\Controllers\Programme_Controller;
use App\Http\Controllers\Formation_Controller;
use App\Http\Controllers\Dashboard_Controller;
use App\Http\Controllers\Groupe_Controller;
use App\Http\Controllers\Inscription_Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// begin admin routes
Route::prefix('admin')->group(function () {

Auth::routes([
  'register' => false,
  'reset' => false
]);
  Route::middleware('auth')->group(function () {

// dashboard
Route::get('/', [Dashboard_Controller::class, 'index']);
Route::get('/home', [Dashboard_Controller::class, 'index'])->name('home');
// client
Route::get('/add', [Client_Controller::class, 'create'])->name('client.add');
Route::get('/list', [Client_Controller::class, 'index'])->name('client.list');
Route::post('store', [Client_Controller::class, 'store'])->name('client.store');
Route::get('delete/{id}', [Client_Controller::class, 'destroy'])->name('client.delete');
Route::get('edit/{id}', [Client_Controller::class, 'edit'])->name('client.edit');
Route::post('update/{id}', [Client_Controller::class, 'update'])->name('client.update');

// programme
Route::get('/addP', [Programme_Controller::class, 'create'])->name('programme.add');
Route::post('storeP', [Programme_Controller::class, 'store'])->name('programme.store');
Route::get('/listP', [Programme_Controller::class, 'index'])->name('programme.listP');
Route::get('deleteP/{id}', [Programme_Controller::class, 'destroy'])->name('programme.delete');
Route::get('editP/{id}', [Programme_Controller::class, 'edit'])->name('programme.edit');
Route::post('updateP/{id}', [Programme_Controller::class, 'update'])->name('programme.update');

// formation
Route::get('/addF', [Formation_Controller::class, 'create'])->name('formation.add');
Route::post('storeF', [Formation_Controller::class, 'store'])->name('formation.store');
Route::get('/listF', [Formation_Controller::class, 'index'])->name('formation.listF');
Route::get('deleteF/{id}', [Formation_Controller::class, 'destroy'])->name('formation.delete');
Route::get('editF/{id}', [Formation_Controller::class, 'edit'])->name('formation.edit');
Route::post('updateF/{id}', [Formation_Controller::class, 'update'])->name('formation.update');

// groupe
Route::get('/addG', [Groupe_Controller::class, 'create'])->name('groupe.add');
Route::post('storeG', [Groupe_Controller::class, 'store'])->name('groupe.store');
Route::get('/listGF', [Groupe_Controller::class, 'index'])->name('groupe.listGF');
Route::get('deleteG/{id}', [Groupe_Controller::class, 'destroy'])->name('group.delete');
Route::get('editG/{id}', [Groupe_Controller::class, 'edit'])->name('group.edit');
Route::post('updateG/{id}', [Groupe_Controller::class, 'update'])->name('group.update');

});
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', [Inscription_Controller::class, 'index'])->name('inscription');
Route::get('/store', [Inscription_Controller::class, 'store'])->name('store');



