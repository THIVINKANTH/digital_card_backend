<?php

use App\Http\Controllers\CardsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('front.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('app.home');

Route::get('admin',function(){
    return view('auth.admin');
});

Route::get('back',function(){
    return view('app.virtualbackground');
});
Route::get('add-new',function(){
    return view('app.add-new');
});
Route::get('edit',function()
{
    return view('app.edit');
});
Route::get('settings',function(){
    return view('app.Settings');
});
// Route::get('cards',function()
// {
//     return view('app.cards');
// });


// create cards
Route::get('create_card',[CardsController::class,'create_card']);
Route::post('create_card',[CardsController::class,'insert_card']);

//card list
Route::get('list',[CardsController::class,'cards_list']);

//update cards
Route::get('update/{id}',[CardsController::class,'edit_card']);
Route::post('update/{id}',[CardsController::class,'update_card']);

//delete card
Route::get('delete/{id}',[CardsController::class,'delete_card']);
