<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Valor;

use App\Http\Controllers\ValorController;
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
/*NAVBAR*/


Route::get('/', 'PublicofertController@ofertas');


Route::get('/contact', function () {
    return view('contact');
});

Route::post('myurl', [SearchController::class, 'show']);

Route::get('/productos', 'StoreController@index');

Route::get('productos/{slug}',
[
    'as'   => 'product-details',
    'uses' => 'StoreController@show'
]);

/*PRUEBA
Route::resource('/categorias', 'StoreController');*/


Route::get('categorias/{slug}',[
    'uses' => 'StoreController@searchCategory',
])->name('searchCategory');



Route::get('/nosotros', 'ClientesController@clientes');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* GESTION*/
Route::resource('usuarios','UserController')->middleware('auth')->middleware('auth');
Route::resource('clientts','ClienttController')->middleware('auth')->middleware('auth');

//Route::resource('register','RegisterController')->middleware('auth')->middleware('auth');
Route::post('/login-two-factor/{user}', 'Auth\LoginController@login2FA')->name('login.2fa');

//REGISTRAR 
Route::get('register', 'Auth\RegisterController@getRegister')->name('register');
Route::post('register', 'Auth\RegisterController@postregister')->name('register');

Route::resource('roles','RoleController')->middleware('auth')->middleware('auth');
Route::resource('/clientes/todas', 'ClientesController')->middleware('auth');
Route::resource('/proveedores', 'ProveedoresController')->middleware('auth');
Route::resource('/ofertas/todas', 'PublicofertController')->middleware('auth');

Route::resource('/Categorias', 'CategoriasController')->middleware('auth');
Route::resource('/producto', 'ProductoController')->middleware('auth');

/*ADMIN*/

Route::post('val',[ValorController::class,'update'])->name('Valor.update');//ruta agrea prpoductio