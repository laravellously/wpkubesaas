<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', 'login');

Route::redirect('/onboarding', 'onboarding/start');
Route::view('onboarding/start', 'onboarding.stepone')->name('onboarding.start');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'onboarded'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['prefix' => config('voyager.path', 'backoffice')], function () {
    Voyager::routes();
})->middleware('onboarded');
