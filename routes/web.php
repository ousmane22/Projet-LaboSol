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

Route::get('/','HomeController@getStatistique');
   

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//CLIENT ROUTE
Route::get('/add','ClientController@index')->name('client.add');
Route::get('/getDetails/{id}', 'ClientController@getDetailsTypeClient')->name('getdetails');
Route::post('/add.client', 'ClientController@store')->name('add.client');
Route::get('/list', 'ClientController@listClient')->name('list.client');
Route::get('/rechercher', 'ClientController@rechercherClient')->name('rechercher');
Route::get('/getclient', 'ClientController@getClient')->name('getClient');



//FICHE DEMANDE ROUTE
Route::get('/fiche.add', 'FicheDemandeController@index')->name('add.fiche');
Route::post('/store', 'FicheDemandeController@store')->name('store.fiche');
Route::get('/fiche.list', 'FicheDemandeController@listFiche')->name('list.fiche');
Route::get('/fiche.pdf/{id}', 'FicheDemandeController@show')->name('show.fiche');
Route::get('/getFiche', 'FicheDemandeController@getFiche')->name('getFiche');



//Echantillon  ROUTE
Route::get('/echantillon.add', 'EchantillonController@index')->name('add.echantillon');
Route::post('/echantillon', 'EchantillonController@store');
Route::get('/echantillon.list', 'EchantillonController@list')->name('list.echantillon');
Route::get('/echantillon.get', 'EchantillonController@getE');



//type echantillon
Route::get('/typeechantillon', 'TypeEchantillonController@index');
 
// result Route
Route::get('/Result/{id}', 'ResultatController@index')->name('giveResult');
Route::post('/storeResult', 'ResultatController@store')->name('store.result');

//Afficher la fiche résultat pour chaque fiche de demande

Route::get('/fiche_resultat/{file}','FicheDemandeController@ResultatParfiche')->name('getResultFile');

//GESTION FACTURATION ROUTE
Route::get('/facture','FactureController@getFacture')->name('factures');
//generer facture pour chaque fiche de demande
Route::get('/getFacture/{id}', 'FactureController@GenererFacture')->name('genererFacture');











