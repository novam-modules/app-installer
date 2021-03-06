<?php

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

Route::get('/', function ()
{
            return view('index');
}
 );

Auth::routes(['verify' => true]);

Route::get('/auth', Auth\AuthController::class )->name('auth');

Route::get('/home', HomeController::class )->name('home');

Route::post('/install', 'HomeController@install')->name('install');


// Route::group(['prefix' => 'admin', 'middleware' => ['web', 'admin']], function ()
// {
//     //This is where you can define some logic to be run before the modules are loaded!
//     // return redirect('admin/dashboard');
//     Route::resource('settings', Sys\SettingsController::class);
//     Route::any('/', AdminController::class);
// });

foreach (user_routes() as $prefix) {

    Route::group([
        'prefix' => $prefix, 'middleware' => ['web', 'verified', 'admin']

    ], function () {

        Route::any('dashboard', AdminController::class );
        Route::resource('settings', Sys\SettingsController::class );
        Route::resource('account', Sys\AccountController::class);
    }
     );
}
