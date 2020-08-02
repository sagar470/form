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

  Route::get('/', function() {


    return view('welcome');

});


    Route::get('/about', function() {

        $articles= App\Article::all();



        return view('about',[
            'articles'=>$articles
        ]);

});
    Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');

Route::get('/articles/create','ArticlesController@create');

Route::get('/articles/{article}','ArticlesController@show')->name('articles.show');

Route::get('/articles/{article}/edit','ArticlesController@edit');

Route::put('/articles/{article}','ArticlesController@update');


