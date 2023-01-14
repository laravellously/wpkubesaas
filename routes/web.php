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
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/billing', function () {
        return view('dashboard');
    })->name('billing');
    Route::get('/dns', function () {
        return view('dashboard');
    })->name('dns');
    Route::get('/support', function () {
        return view('dashboard');
    })->name('support');

    Route::get('/settings/account', function () {
        return view('settings/account');
    })->name('account');
    Route::get('/settings/notifications', function () {
        return view('settings/notifications');
    })->name('notifications');
    Route::get('/settings/apps', function () {
        return view('settings/apps');
    })->name('apps');
    Route::get('/settings/plans', function () {
        return view('settings/plans');
    })->name('plans');
    Route::get('/settings/billing', function () {
        return view('settings/billing');
    })->name('billing');
    Route::get('/settings/feedback', function () {
        return view('settings/feedback');
    })->name('feedback');

    Route::view('/kubes/new', 'kubes.create')->name('kubes.create');
});


Route::group(['prefix' => config('voyager.path', 'backoffice')], function () {
    Voyager::routes();
});
