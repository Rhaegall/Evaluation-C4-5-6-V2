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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'AccueilController@index')->name('accueil');


Route::get('/listeArticle', 'ListeArticleController@index');

Route::get('/statistique', function (){
    return view('statistique');
})->name('statistique');

Route::get('/historique', function (){
    return view('historique');
})->name('historique');

Route::get('/saisieMovement', function (){
    return view('saisieMovement');
})->name('saisie');

Route::get('/creationArticle', function (){
    return view('creationArticle');
})->name('creation');


Route::get('/modificationArticle', function (){
    return view('modificationArticle');
})->name('modification');
