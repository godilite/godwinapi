<?php
use App\SurveyImage;
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
Route::get('dashboard',[
    'uses'=>'ReportsController@dashboard',
    'as'=>'dashboard'
]);
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('form/forms/{id}',[
    'uses'=>'FormsController@forms',
    'as'=>'surveys'
]);
Route::get('form/show/{id}',[
    'uses'=>'FormsController@formShow',
    'as'=>'form.show'
]);
Route::get('/report/add', ['uses'=>'ReportsController@add',
'as'=>'report.add'
]);
Route::post('/report/create',[
    'uses'=>'ReportsController@create',
    'as'=>'report.create'
]);
Route::get('report/attach/{id}',[
    'uses'=>'ReportsController@attach',
    'as'=>'attachment'
]);
Route::get('report/update/{id}',[
    'uses'=>'ReportsController@updateSurvey',
    'as'=>'update'
]);
Route::post('report/update/{survey_id}',[
    'uses'=>'ReportsController@saveSurvey',
    'as'=>'report.update'
]);
Route::get('report/delete/{survey_id}',[
    'uses'=>'ReportsController@destroy',
    'as'=>'delete'
]);

Route::get('/report/show',[
    'uses'=>'ReportsController@reports',
    'as'=>'report.show'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
