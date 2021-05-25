<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
// Route::get('/',[ContactController::class,'index']);
$router->get('/', 'ContactController@index');
$router->group(['prefix' =>'api'], function () use ($router) {
    $router->post('contact','ContactController@create'); 
    $router->get('contact','ContactController@get');  
    $router->put('contact/{id}','ContactController@update');  
    $router->delete('contact/{id}','ContactController@delete'); 
});