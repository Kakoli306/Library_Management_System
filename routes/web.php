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

Route::get('/','WelcomeController@index');
Route::get('/book{id}','WelcomeController@newFunction');
//Route::get('/all_books','WelcomeController@newFunction');

Route::get('/blog','WelcomeController@newFunction1');

Route::get('/book-details','WelcomeController@newFunction2');

Route::get('/blog-single','WelcomeController@newFunction3');

Route::get('/Checkout','WelcomeController@newFunction4');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/member/add', 'MemberController@index');

Route::post('/new','MemberController@saveMember')->name('new-member');

Route::group(['prefix'=> 'member'],function () {
    Route::get('/manage', 'MemberController@manageMember');

    Route::get('/offline/{id}', 'MemberController@offlineMember');
    Route::get('/online/{id}', 'MemberController@onlineMember');
    Route::get('/edit/{id}', 'MemberController@editMember');
    Route::post('/update', 'MemberController@updateMember');
    Route::post('/delete', 'MemberController@deleteMember');

});
Route::get('/circulation/book','BookController@index')->name('circulation-book');

Route::post('/new/book','BookController@saveBook')->name('new-book');

Route::get('book/configuration/','BookController@configurationBook')->name('configuration-book');

Route::post('/book/unpublished', 'BookController@unpublishedBook')->name('unpublished-book');

Route::post('/book/published', 'BookController@publishedBook')->name('published-book');

Route::post('/book/edit', 'BookController@editBook')->name('edit-book');

Route::post('/book/update', 'BookController@updateBook')->name('update-book');

Route::post('/book/delete', 'BookController@deleteBook')->name('delete-book');

Route::get('/general/settings','SettingsController@index')->name('general-settings');
Route::get('/add', 'ProductController@index')->name('add-product');
Route::post('/settings/save', 'SettingsController@saveLogo')->name('save-settings');

Route::group(['prefix'=>'circulation'],function(){
    Route::get('add', 'CirculationController@index')->name('add-circulation');
    Route::post('/edit', 'CirculationController@editCirculation')->name('edit-circulation');
    Route::get('manage', 'CirculationController@manageCirculation')->name('manage-circulation');
    Route::post('/new', 'CirculationController@saveCirculation')->name('new-circulation');
    Route::post('/delete','CirculationController@deleteCirculation')->name('delete-circulation');
});




