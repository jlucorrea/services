<?php

use App\Models\User;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VistasController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;

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

Route::get('/home', [VistasController::class, 'index'])->name('index');
Route::get('/contact', [VistasController::class, 'formulario'])->name('contact');
Route::get('/servicesinfo', [ServiceController::class, 'servicesinfo'])->name('servicesinfo');
Route::get('/servicescontact', [ContactController::class, 'servicescontact'])->name('servicescontact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.register');

Route::get('/dashboard', function () {
	$contact = Contact::count();
	$services = Service::count();
	$user = User::count();
    return view('dashboard', compact('contact','services','user'));
})->middleware(['auth', 'verified'])->name('dashboard');

 // USUARIOS
 Route::controller(UserController::class)->middleware(['middleware' => 'auth'])->prefix('users')->group(function(){
	Route::get('', 'index')->name('users.index');
	Route::get('create', 'create')->name('users.create');
	Route::post('register', 'store')->name('users.register');
	Route::get('edit/{id}', 'edit')->name('users.edit');
	Route::put('update/{id}', 'update')->name('users.update');
	Route::get('{id}', 'destroy')->name('users.destroy');
});

 // Servicios
 Route::controller(ServiceController::class)->middleware(['middleware' => 'auth'])->prefix('services')->group(function(){
	Route::get('', 'index')->name('services.index');
	Route::get('create', 'create')->name('services.create');
	Route::post('register', 'store')->name('services.register');
	Route::get('edit/{id}', 'edit')->name('services.edit');
	Route::put('update/{id}', 'update')->name('services.update');
	Route::get('{id}', 'destroy')->name('services.destroy');
});

 // SOLICITUDES DE CONTACTO
 Route::controller(ContactController::class)->middleware(['middleware' => 'auth'])->prefix('contactview')->group(function(){
	Route::get('', 'index')->name('contactview.index');
	Route::get('edit/{id}', 'edit')->name('contactview.edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
