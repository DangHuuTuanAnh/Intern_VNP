<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

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

// 	Article::createIndex($shards = null,$replicas = null);
// 	Article::putMapping($ignoreConflicts = true);
// 	Article::addAllToIndex();

//     return view('welcome');
// });
Article::addAllToIndex();
Route::get('formsearch','ElasticSearchController@index')->name('elastic.index');
Route::get('search','ElasticSearchController@search')->name('elastic.search');


// Route::get('test', function () {
    
//      $articles = Article::searchByQuery(['match' => ['title' => 'xin']]);

//     return $articles->chunk(2);
//      // return $articles;

// });
