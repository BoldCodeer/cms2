<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Advisor\Groups;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [UserController::class, "index"])->name('dashboard');
});

Route::get('/group', Groups::class);

//Route::get('/group', function () {
//    return view('livewire.advisor.home');
//});

Route::get('group-pagination', function () {
    return view('default');
});
