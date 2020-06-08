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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');


//steps_4 : now create route for the operations
Route::get('/questionnaires/create','QuestionnaireController@create');
Route::post('/questionnaires','QuestionnaireController@store');
Route::get('/questionnaires/{questionnaire}','QuestionnaireController@show');

//survey route
Route::get('/surveys/{questionnaire}-{slug}','SurveyController@show'); 
Route::post('/surveys/{questionnaire}-{slug}','SurveyController@store'); 

Route::get('/questionnaires/{questionnaire}/questions/create', 'QuestionController@create');
Route::post('/questionnaires/{questionnaire}/questions', 'QuestionController@store');
Route::delete('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@destory');

