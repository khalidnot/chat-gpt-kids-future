<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomAuthController;


use Illuminate\Support\Facades\Route;

Route::get('/', [ChatController::class, 'index']);
Route::post('/', [ChatController::class, 'store']);
Route::get('/reset', [ChatController::class, 'destroy']);

Route::get('/home', [UserController::class, 'index'])->name('users.index');
Route::post('/store', [UserController::class, 'store'])->name('users.store');

Route::get('/genderview', [UserController::class, 'genderview'])->name('users.genderview');
Route::post('/genderstore', [UserController::class, 'genderstore'])->name('users.genderstore');

Route::get('/nameview', [UserController::class, 'nameview'])->name('users.nameview');
Route::post('/namestore', [UserController::class, 'namestore'])->name('users.namestore');

Route::get('/subjectview', [UserController::class, 'subjectview'])->name('users.subjectview');
Route::post('/subjectstore', [UserController::class, 'subjectstore'])->name('users.subjectstore');

Route::get('/ageview', [UserController::class, 'ageview'])->name('users.ageview');
Route::post('/agestore', [UserController::class, 'agestore'])->name('users.agestore');

Route::post('/agestore', [UserController::class, 'agestore'])->name('users.agestore');

//Route::get('/chatgpt', [UserController::class, 'chatgpt'])->name('users.chatgpt');

Route::get('/sendchatgpt', [UserController::class, 'sendchatgpt'])->name('sendchatgpt');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


