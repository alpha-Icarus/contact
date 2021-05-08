<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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
// Route::get('/',[UserController::class,'index']);
$Router->get('/', 'UserController@index');
$Router->group(['prefix' =>'api'], function () use ($router) {
    $Router->post('user','UserController@create'); 
    $Router->get('get','UserController@get');  
    $Router->get('updata','UserController@updata');  
    $Router->get('delete','UserController@delete'); 
});

$router->get('Admin', 'AdminController@index');
$router->group(['prefix' =>'api'], function () use ($router) {
    $router->post('Admin','AdminController@create'); 
    $router->get('get','AdminController@get');  
    $router->put('updata','AdminController@updata');  
    $router->delete('delete','AdminController@delete'); 
});

$router->get('Supplier', 'SupplierController@index');
$router->group(['prefix' =>'api'], function () use ($router) {
    $router->post('Supplier','SupplierController@create'); 
    $router->get('get','SupplierController@get');  
    $router->put('updata','SupplierController@updata');  
    $router->delete('delete','SupplierController@delete'); 
});

$router->get('Inventory', 'InventoryController@index');
$router->group(['prefix' =>'api'], function () use ($router) {
    $router->post('Inventory','InventoryController@create'); 
    $router->get('get','InventoryController@get');  
    $router->put('updata','InventoryController@updata');  
    $router->delete('delete','InventoryController@delete'); 
});