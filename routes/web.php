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

Route::get('/', 'SiteController@index');
// Route::get('/about', 'SiteController@about')->name('about');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/actualite', 'SiteController@blog')->name('blog');
Route::get('/actualite/{slug}', 'SiteController@single')->name('single');

Route::get('/nos-projet', 'SiteController@projets')->name('projets');
Route::get('/projets/{slug}', 'SiteController@projet')->name('projet');

Route::get('/contacts', function () {
    $page = (object) array("header" => "header1", "title" => "contacts");
    return view('pages.contacts', compact(['page']));
})->name('contacts');
Route::post('/contacts', 'SiteController@contacts');

Route::get('/{slug}', 'SiteController@pages')->name('pages');
