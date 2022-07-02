<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|\
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes([
     'register' => false,
]);

//LANDING PAGE
Route::get('/', 'LandingController@index')->name('index');
Route::get('/about', 'LandingController@about')->name('about');
Route::get('/contact', 'LandingController@contact')->name('contact');


//landing certificates
Route::get('/certificates', 'LandingController@certificates')->name('certificates');
Route::get('/certificate', function () {
    return redirect()->route('certificates');
});
Route::get('/certificate/{certificate}', 'LandingController@certificate')->name('certificate.detail');


//landing portfolio
Route::get('/portfolios', 'LandingController@portfolios')->name('portfolios');
Route::get('/portfolio', function () {
    return redirect()->route('portfolios');
});
Route::get('/portfolio/{portfolio}', 'LandingController@portfolio')->name('portfolio.detail');





//ADMIN DASHBOARD
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Route::prefix('dashboard')->group(function () {
    Route::resource('certificates', CertificateController::class);
    Route::resource('portfolios', PortfolioController::class);
});


