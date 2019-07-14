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

// CRUD DE USUARIOS
Route::prefix('admin')->group(function () {
    Route::get('/create/users', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('/show/users', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('/update/users', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('/delete/users', function () {
        // Matches The "/admin/users" URL
    });

    // CRUD MONITORES
    Route::get('/create/monitores', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('/show/monitores', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('/update/monitores', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('/delete/monitores', function () {
        // Matches The "/admin/users" URL
    });

    // CRUD CURSO
    Route::get('/create/curso', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('/show/curso', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('/update/curso', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('/delete/curso', function () {
        // Matches The "/admin/users" URL
    });
    // RU CONTENIDO BASICO
    Route::get('/show/content', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('/update/content', function () {
        // Matches The "/admin/users" URL
    });
});

Route::prefix('home')->group(function () {
    Route::get('/mision', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('/vision', function () {
        // Matches The "/admin/users" URL
    });
});