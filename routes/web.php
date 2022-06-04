<?php

use App\Models\User;
use App\Models\Ad;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Process\Process;

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
    $users = User::paginate();
    //paginate تعمل على تقسيم البيانات
return view('Users/index',compact('users'));

});
Route::get('/heba',function(){
    return view('Users/create');

    });


Route::get('/ads',function(){
    $ads = Ad::paginate();
    return view('Ads/index',compact('ads'));

    });


    Route::get('/Products',function(){
        $Products = Product::paginate();
        return view('Products/index',compact('Products'));

        });


        Route::get('/Categories',function(){
            $Categories = Categorie::paginate();
            return view('Categories/index',compact('Categories'));

            });


            Route::get('/Managers',function(){
                return view('Managers/index');

                });
