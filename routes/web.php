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

   /* ///////////////////////////////
        Admin panel routerlari
    */ //////////////////////////////
Route::prefix('full-panel')->middleware(['auth'])->group(function () {
   Route::get('/', 'admin\AdminController@index')->name('admin.index');
   

   /* ///////////////////////////////
        Yangiliklar routerlari
    */ //////////////////////////////
   Route::prefix('yangiliklar')->middleware(['auth'])->group(function () {
      
   Route::resource('/', 'admin\YangiliklarController')->names([
      'index' => 'yangiliklar',
      'create' => 'yangiliklar.create',
      'store' => 'yangiliklar.store'
      ]);

      // * Qo'shimcha ishlarga
  
      Route::get('activmaslar', 'admin\YangiliklarController@activmas')->name('yangiliklar.activmas');
      Route::get('activlar', 'admin\YangiliklarController@active')->name('yangiliklar.activlar');


      Route::resource('bolimlar', 'admin\ArticleCategoryController')->names([
         'index' => 'yangilik-bolim.index',
         'store' => 'yangilik-bolim.store'
      ]);

   });
   Route::get('/admin', 'HomeController@index')->name('admin');
});
Auth::routes();

Route::get('/fragment', function(){
   return view('admin.crud.fragmentlar.file-manager');
});
