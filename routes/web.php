<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('balance', 'App\Http\Controllers\BalanceController');
Route::resource('lesson', 'App\Http\Controllers\LessonController');
Route::resource('major', 'App\Http\Controllers\MajorController');
Route::resource('payment', 'App\Http\Controllers\PaymentController');
Route::resource('question', 'App\Http\Controllers\QuestionController');
Route::resource('role', 'App\Http\Controllers\RoleController');
Route::resource('test', 'App\Http\Controllers\TestController');
Route::resource('test_student', 'App\Http\Controllers\TestStudentController');
Route::resource('user', 'App\Http\Controllers\UserController');
Route::resource('wallet', 'App\Http\Controllers\WalletController');
Route::resource('basket', 'App\Http\Controllers\BuyBasketController');


Route::get('/menu', function () {
    return view('menu_new');
});
Route::get('/role/create',function(){
    return view('Role.sign_in');
});
// Route::resource('/test',TestController2::class);
Route::get('/user/create',function(){
    return view('User.user');
});
Route::get('/role/all',function(){
    return view('Role.all');
});
// Route::resource('/test',TestController2::class);
Route::get('/user/all',function(){
    return view('User.all');
});
Route::get('/wallet/create',function(){
    return view('Wallet.create');
});
Route::get('/wallet/all',function(){
    return view('Wallet.all');
});
Route::get('/test_student/create',function(){
    return view('TestStudent.create');
});
Route::get('/test_student/all',function(){
    return view('TestStudent.all');
});
Route::get('/question/create',function(){
    return view('Question.create');
});
Route::get('/basket/all',function(){
    return view('BuyBasket.all');
});
Route::get('/basket/create',function(){
    return view('BuyBasket.create');
});
Route::get('/question/all',function(){
    return view('Question.all');
});
Route::resource('/role',RoleController::class);
// Route::resource('/test',TestController2::class);
Route::post('/user',[App\Http\Controllers\UserController::class,'store']);
Route::resource('/user',App\Http\Controllers\UserController::class);

