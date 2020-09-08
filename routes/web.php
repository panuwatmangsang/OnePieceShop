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
    return view('pages.index');
})->name('index');
Route::get('/products','productsController@index')->name('products');
Route::get('/account','accountController@index')->name('account');
Route::get('/cart','cartController@index')->name('cart');
Route::get('/contact','contactController@index')->name('contact');
Route::get('/about','aboutController@index')->name('about');

// ------------------------- products -------------------------
Route::get('/models','ModelsController@index')->name('models');
Route::get('/poster','posterProductsController@index')->name('poster');
Route::get('/clothes','clothesController@index')->name('clothes');
Route::get('/accessories','accessoriesController@index')->name('accessories');
Route::get('/sundry','sundryController@index')->name('sundry');

// ------------------------ models detail ------------------
Route::get('/kaido','kaidoDetailController@index')->name('kaido');
Route::get('/luffy3','luffy3DetailController@index')->name('luffy3');
Route::get('/jinbe','jinbeDetailController@index')->name('jinbe');
Route::get('/luffyKatakuri','luffyKatakuriDetailController@index')->name('luffyKatakuri');
Route::get('/hancock','hancockDetailController@index')->name('hancock');
Route::get('/zoro','zoroDetailController@index')->name('zoro');
Route::get('/marco','marcoDetailController@index')->name('marco');
Route::get('/franky','frankyDetailController@index')->name('franky');
Route::get('/hancockShip','hancockShipDetailController@index')->name('hancockShip');
Route::get('/luffy','luffyDetailController@index')->name('luffy');
Route::get('/luffy2','luffy2DetailController@index')->name('luffy2');
Route::get('/miniLuffy','miniLuffyDetailController@index')->name('miniLuffy');
Route::get('/LAS','LASController@index')->name('LAS');

// ------------------------ models detail ------------------
Route::get('/poster1','poster1Controller@index')->name('poster1');
Route::get('/poster2','poster2Controller@index')->name('poster2');
Route::get('/poster3','poster3Controller@index')->name('poster3');
Route::get('/poster4','poster4Controller@index')->name('poster4');
Route::get('/poster5','poster5Controller@index')->name('poster5');
Route::get('/poster6','poster6Controller@index')->name('poster6');
Route::get('/poster7','poster7Controller@index')->name('poster7');
Route::get('/poster8','poster8Controller@index')->name('poster8');
Route::get('/poster9','poster9Controller@index')->name('poster9');
Route::get('/poster10','poster10Controller@index')->name('poster10');
Route::get('/poster11','poster11Controller@index')->name('poster11');
Route::get('/poster12','poster12Controller@index')->name('poster12');

// ------------------------ clothes detail ------------------
Route::get('/shirt1','shirt1Controller@index')->name('shirt1');
Route::get('/shirt2','shirt2Controller@index')->name('shirt2');
Route::get('/shirt3','shirt3Controller@index')->name('shirt3');
Route::get('/shirt4','shirt4Controller@index')->name('shirt4');
Route::get('/shirt5','shirt5Controller@index')->name('shirt5');
Route::get('/shirt6','shirt6Controller@index')->name('shirt6');
Route::get('/shirt7','shirt7Controller@index')->name('shirt7');
Route::get('/shirt8','shirt8Controller@index')->name('shirt8');
Route::get('/shirt9','shirt9Controller@index')->name('shirt9');
Route::get('/shirt10','shirt10Controller@index')->name('shirt10');
Route::get('/shirt11','shirt11Controller@index')->name('shirt11');
Route::get('/shirt12','shirt12Controller@index')->name('shirt12');

// ------------------------ accessories detail ------------------
Route::get('/accessories1','accessories1Controller@index')->name('accessories1');
Route::get('/accessories2','accessories2Controller@index')->name('accessories2');
Route::get('/accessories3','accessories3Controller@index')->name('accessories3');
Route::get('/accessories4','accessories4Controller@index')->name('accessories4');
Route::get('/accessories5','accessories5Controller@index')->name('accessories5');
Route::get('/accessories6','accessories6Controller@index')->name('accessories6');
Route::get('/accessories7','accessories7Controller@index')->name('accessories7');
Route::get('/accessories8','accessories8Controller@index')->name('accessories8');
Route::get('/accessories9','accessories9Controller@index')->name('accessories9');
Route::get('/accessories10','accessories10Controller@index')->name('accessories10');
Route::get('/accessories11','accessories11Controller@index')->name('accessories11');
Route::get('/accessories12','accessories12Controller@index')->name('accessories12');

// ------------------------ sundry detail ------------------
Route::get('/sundry1','sundry1Controller@index')->name('sundry1');
Route::get('/sundry2','sundry2Controller@index')->name('sundry2');
Route::get('/sundry3','sundry3Controller@index')->name('sundry3');
Route::get('/sundry4','sundry4Controller@index')->name('sundry4');
Route::get('/sundry5','sundry5Controller@index')->name('sundry5');
Route::get('/sundry6','sundry6Controller@index')->name('sundry6');
Route::get('/sundry7','sundry7Controller@index')->name('sundry7');
Route::get('/sundry8','sundry8Controller@index')->name('sundry8');
Route::get('/sundry9','sundry9Controller@index')->name('sundry9');
Route::get('/sundry10','sundry10Controller@index')->name('sundry10');
Route::get('/sundry11','sundry11Controller@index')->name('sundry11');
Route::get('/sundry12','sundry12Controller@index')->name('sundry12');
