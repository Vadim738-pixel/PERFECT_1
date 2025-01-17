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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/vadim', function () {
    return 'aaaaaaaaaaaaaaaaaaaaaaa';
});




Route::group(['namespace' => 'Post'], function () {


    Route::get('/posts', 'IndexController')->name('posts.index');
    Route::get('/posts/create', 'CreateController' )->name('posts.create');

    Route::post('/posts', 'StoreController')->name('posts.store');
    Route::get('/posts/{post}', 'ShowController')->name('posts.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('posts.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('posts.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('posts.delete');

});


Route::group(['namespace' => 'Admin', "prefix" => 'admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {

        Route::get('/post', 'IndexController')->name('admin.post.index');

    });

});



Route::get('/posts/update', 'PostController@update' );
Route::get('/posts/delete', 'PostController@delete' );
Route::get('/posts/first_or_create', 'PostController@firstOrCreate' );
Route::get('/posts/update_or_create', 'PostController@updateOrCreate' );

Route::get('/main', 'MainController@index')->name('main.index');
Route::get('/contacts', 'ContactController@index')->name('contact.index');
Route::get('/about', 'AboutController@index')->name('about.index');







