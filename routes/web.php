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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users',function(){
return view('Users/index');

});
Route::get('/heba',function(){
    return view('Users/create');

    });


Route::get('/ads',function(){
    return view('Ads/index');

    });


    Route::get('/Products',function(){
        return view('Products/index');

        });


        Route::get('/Categories',function(){
            return view('Categories/index');

            });


            Route::get('/Managers',function(){
                return view('Managers/index');

                });
