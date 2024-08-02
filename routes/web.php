<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix' => '/', 'namespace' => 'App\Http\Controllers\Home'], function () { 

    Route::get('services/{slug}','HomepageController@showService')->name('services.show');

    Route::get('/', function () { return view('home'); });
    Route::get('/aboutus', function () { return view('pages.aboutus'); });
    Route::get('/our-doctor', function () { return view('pages.ourdoctor'); });
    Route::get('/faq', function () { return view('pages.faq'); });
    Route::get('/contact', function () { return view('pages.contact'); });
    Route::get('/privacy-policy', function () { return view('pages.privacypolicy'); });

});


