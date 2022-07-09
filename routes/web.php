<?php
use Illuminate\Support\Facades\Routes;
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
Route::group(['middleware' => ['auth']], function(){
Route::get('/', 'ToDoListController@index')->middleware('auth');
Route::get('/ToDoLists/create', 'ToDoListController@create');
Route::get('/ToDoLists/{to_do_lists}', 'ToDoListController@show');
Route::get('/ToDoLists/{to_do_lists}/edit', 'ToDoListController@edit');
Route::put('/ToDoLists/{to_do_lists}', 'ToDoListController@update');
Route::get('/categories/{category}', 'CategoryController@index');
Route::post('/ToDoLists', 'ToDoListController@store');
Route::delete('/ToDoLists/{to_do_lists}', 'ToDoListController@delete');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
