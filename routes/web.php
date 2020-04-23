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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'IndexController@index')->name('site.index');


Route::prefix('full-panel')->middleware(['auth'])->group(function () {
   Route::get('/', 'admin\AdminController@index')->name('admin.index');
   Route::resource('yangiliklar', 'admin\YangiliklarController')->names([
      'index' => 'yangiliklar'
      ]);
   Route::get('/admin', 'HomeController@index')->name('admin');
});
Auth::routes();


