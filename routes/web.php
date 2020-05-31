<?php

use Illuminate\Support\Facades\Auth;
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

//ROTA DESTINADA AO CONTROLLER 'USERCONTROLLER'
Route::resource('usuarios', 'UserController')->names('user')->parameters(['usuarios'=>'user']);

//ROTA DESTINADA AO CONTROLLER 'POSTCONTROLLER'
Route::resource('posts', 'PostController');

//ROTA DESTINADA AO CONTROLLER 'ADDRESSCONTROLLER'
Route::resource('endereco', 'AddressController')->names('address')->parameters(['endereco' => 'address']);

//ROTA DESTINADA AO CONTROLLER 'CATEGORYCONTROLLER'
Route::resource('categorias', 'CategoryController')->names('category')->parameters(['categorias' => 'category']);

//ROTA DESTINADA AO CONTROLLER 'HOMECONTROLLER' -> responsável por otimizar o processo de login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ROTA DESTINADA AO CONTROLLER 'AUTHCONTROLLER' -> rota responsável pelo processo 'manual' de login
Route::get('/admin', 'AuthController@dashboard')->name('admin');
Route::get('/admin/login', 'AuthController@showLoginForm')->name('admin.login');
Route::post('/admin/login/do', 'AuthController@login')->name('admin.login.do');
