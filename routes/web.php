<?php

use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', fn ()  => inertia('Welcome', [
    'appName' => config('app.name', 'Laravel With Inertia Demo')
]))->name('welcome');

Route::resource('users', UserController::class)->only(['index']);
Route::get('/settings', SettingsController::class)->name('settings');

Route::post('/logout', function(){
    
    dd("Destroying Authenticated User Session");

})->name('logout');
