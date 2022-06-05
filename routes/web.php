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
    return view(redirect(route('login')));
});

Route::get('/dashboard', function () {
    return redirect('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/users',function(){
return view('Users/index');

});

Route::get('/maryam',function(){
    return view('Users/create');

    });


Route::get('/ads',function(){
    return view('Ads.index');

    })->middleware(['auth'])->name('Ads.index');


    Route::get('/Products',function(){
        return view('Products.index');

        })->middleware(['auth'])->name('Products.index');


        Route::get('/Categories',function(){
            return view('Categories.index');

            })->middleware(['auth'])->name('Categories.index');


            Route::get('/Managers',function(){
                return view('Managers.index');

                })->middleware(['auth'])->name('Managers.index');
