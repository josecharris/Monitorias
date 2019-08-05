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


Route::prefix('admin')->group(function () {
    // CRUD DE USUARIOS
    Route::resource('users','UsersController');
    Route::get('users/{id}/destroy',[
        'uses' => 'UsersController@destroy',
        'as' => 'users.destroy'
    ]);

    // CRUD MONITORES
    Route::resource('monitores','MonitoresController');
    

    // CRUD CURSO
    Route::resource('courses','CoursesController');
    Route::get('courses/{id}/destroy',[
        'uses' => 'CoursesController@destroy',
        'as' => 'courses.destroy'
    ]);
});

Route::prefix('home')->group(function () {
    Route::get('/mision', [
        'uses' => 'UsersController@mision',
        'as' => 'home.mision'
    ]);
    Route::get('/edit-mision', [
        'uses' => 'UsersController@editMision',
        'as' => 'home.editmision'
    ]);
    Route::get('/update-mision', [
        'uses' => 'UsersController@updateMision',
        'as' => 'home.updatemision'
    ]);

    //VISION

    Route::get('/vision', [
        'uses' => 'UsersController@vision',
        'as' => 'home.vision'
    ]);

    Route::get('/crear-matricula',[
        'uses' => 'UsersController@matricula',
        'as' => 'matricula'
    ]);

    Route::get('/matricular',[
        'uses' => 'UsersController@matricular',
        'as' => 'home.matricular'
    ]);

    Route::get('/edit-vision', [
        'uses' => 'UsersController@editVision',
        'as' => 'home.editVision'
    ]);
    Route::get('/update-vision', [
        'uses' => 'UsersController@updateVision',
        'as' => 'home.updateVision'
    ]);

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
