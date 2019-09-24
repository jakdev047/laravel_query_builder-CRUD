<?php

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

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/about', 'aboutController@aboutView');
Route::get('all-contacts', 'contactController@AllContact')->name('all.contacts');
Route::get('/insert-data', 'contactController@InsertData');
Route::post('/data-added', 'contactController@DataAdded');
Route::get('/delete-contact/{id}', 'contactController@Delete');
Route::get('/edit-contact/{id}', 'contactController@Edit');
Route::post('/update-contact/{id}', 'contactController@Update');
Route::get('/view-contact/{id}', 'contactController@View');
