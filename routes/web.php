<?php

use App\Http\Controllers\BedSheetsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HandiCraftController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SportswearsController;
use App\Http\Controllers\WomanController;
use App\Models\order;
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


Route::get('/login',[LoginController::class,'index'])->name('login') ;
Route::get('/checkLogin',[LoginController::class,'checkLogin'])->name('checkLogin');
Route::get('/logOut',[LoginController::class,'logOut'])->name('logOut');
Route::get('/dashboard',[IndexController::class,'index'])->name('admin.index')->middleware('UserCheck');

Route::group(['prefix'=>'user','middleware'=>'UserCheck'],function(){
    Route::get('/',[IndexController::class,'adduser'])->name('admin.add.user');
    Route::get('/show',[IndexController::class,'showuser'])->name('admin.show.user');
    Route::post('/store',[IndexController::class,'user'])->name('admin.store.user');
    Route::get('user/edit/{id}',[IndexController::class,'edituser'])->name('admin.user.edit');
    Route::post('user/update',[IndexController::class,'updateuser'])->name('admin.user.update');
    Route::get('user/delete/{id}',[IndexController::class,'destroyuser'])->name('user.delete');

});


Route::group(['prefix'=>'pedal/rackets','middleware'=>'UserCheck'],function(){
Route::get('/',[WomanController::class,'index'])->name('admin.woman');
Route::get('add',[WomanController::class,'create'])->name('admin.woman.add');
Route::post('store',[WomanController::class,'store'])->name('admin.woman.store');
Route::get('pedal/rackets/edit/{id}',[WomanController::class,'edit'])->name('admin.woman.edit');
Route::post('pedal/rackets/update',[WomanController::class,'update'])->name('admin.woman.update');
Route::get('/delete/{id}',[WomanController::class,'destroy'])->name('woman.delete');

});
Route::group(['prefix'=>'football/uniform','middleware'=>'UserCheck'],function(){
Route::get('/',[ManController::class,'index'])->name('admin.man');
Route::get('add/football/uniform',[ManController::class,'create'])->name('admin.man.add');
Route::post('store',[ManController::class,'store'])->name('admin.man.store');
Route::get('football/uniform/edit/{id}',[ManController::class,'edit'])->name('admin.man.edit');
Route::post('football/uniform/update',[ManController::class,'update'])->name('admin.man.update');
Route::get('football/uniform/delete/{id}',[ManController::class,'destroy'])->name('man.delete');
});



Route::group(['prefix'=>'T-shirts/mens','middleware'=>'UserCheck'],function(){
    Route::get('/',[HandiCraftController::class,'index'])->name('show.handi.craft');
    Route::get('/add',[HandiCraftController::class,'create'])->name('add.handi.craft');
    Route::post('store',[HandiCraftController::class,'store'])->name('handi.craft.store');
    Route::get('T-shirts/mens/edit/{id}',[HandiCraftController::class,'edit'])->name('handi.craft.edit');
    Route::post('T-shirts/mens/update',[HandiCraftController::class,'update'])->name('handi.craft.update');
    Route::get('T-shirts/mens/delete/{id}',[HandiCraftController::class,'destroy'])->name('handi.craft.delete');
});


Route::group(['prefix'=>'soccer/uniform','middleware'=>'UserCheck'],function(){

    Route::get('/',[BedSheetsController::class,'index'])->name('bed.sheets');
    Route::get('/add',[BedSheetsController::class,'create'])->name('add.bed.sheets');
    Route::post('store',[BedSheetsController::class,'store'])->name('bed.sheets.store');
    Route::get('soccer/uniform/edit/{id}',[BedSheetsController::class,'edit'])->name('bed.sheets.edit');
    Route::post('soccer/uniform/update',[BedSheetsController::class,'update'])->name('bed.sheets.update');
    Route::get('soccer/uniform/delete/{id}',[BedSheetsController::class,'destroy'])->name('bed.sheets.delete');

});
Route::group(['prefix'=>'admin/sports/wears','middleware'=>'UserCheck'],function(){

    Route::get('/',[SportswearsController::class,'index'])->name('admin.sports.wears');
    Route::get('/add',[SportswearsController::class,'create'])->name('add.sports.wears');
    Route::post('store',[SportswearsController::class,'store'])->name('store.sports.wears');
    Route::get('edit/{id}',[SportswearsController::class,'edit'])->name('sports.wears.edit');
    Route::post('update',[SportswearsController::class,'update'])->name('sports.wears.update');
    Route::get('delete/{id}',[SportswearsController::class,'destroy'])->name('sports.wears.delete');

});


Route::group(['prefix'=>'orders','middleware'=>'UserCheck'],function(){
    Route::get('/',[OrderController::class,'order'])->name('admin.order');
    Route::get('delete/{id}',[OrderController::class,'destroy'])->name('order.delete');
    Route::get('/edit/{id}',[OrderController::class,'edit'])->name('order.edit');
    Route::post('/update',[OrderController::class,'update'])->name('order.update');


});



// ====================== product View ======================



Route::get('/',[FrontController::class,'index'])->name('front.index');
Route::get('/productView/{id}', [FrontController::class,'womanProductView'])->name('productView');
Route::get('custom/football/uniform/productView/{id}', [FrontController::class,'manProductView'])->name('man.football');
Route::get('Custom/soccer/uniform/View/{id}', [FrontController::class,'handiProductView'])->name('handi.soccer');
Route::get('T-shirts/mens/View/{id}', [FrontController::class,'bedProductView'])->name('bed.T-shirts');
Route::get('sportswears/View/{id}', [FrontController::class,'sportswears'])->name('sportswears');
// ====================== product View end ======================



// ====================== order  ======================

Route::POST('order', [FrontController::class,'order'])->name('place.order');

// ====================== order end ======================



// ====================== Front Pages  ======================

Route::get('custom/pedal/rackets/details', [FrontController::class,'womanDetails'])->name('woman.details');
Route::get('custom/football/uniform/details', [FrontController::class,'manDetails'])->name('man.details');
Route::get('Custom/soccer/uniform/details', [FrontController::class,'Cosmetics'])->name('Cosmetics.details');
Route::get('T-shirts/mens/details', [FrontController::class,'bedDetails'])->name('bed.sheets.details');
Route::get('sport/swears/details', [FrontController::class,'sportswears_details'])->name('sportswears.details');
Route::get('Contact', [FrontController::class,'Contact'])->name('Contact');

// ====================== Front Pages end ======================
