<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('contacts')->group(function () {
    
    Route::get('', function () {
        return 'List of contacts page';
    });
    
    Route::get('{id}', function ($id) {
        return "Details page of contact #$id";
    });
    
    Route::get('{id}/name/{nam?}', function ($id,$nam='Ali') {
        return "Details page of contact #$id named $nam";
    });
    
    Route::get('{id}/create/{cret}', function ($id,$cret) {
        return "$id     $cret";
    })->where('id', '[0-9]+');
    
    Route::post('', function () {
        return 'List of contacts page';
    });
    
    Route::get('{id}/edit/{edt?}', function ($id,$edt='edited') {
        return "Details page of contact #$id";
    });
    
    Route::put('{id}', function ($id) {
        return "update Details of page";
    });
    
    Route::delete('{id}', function ($id) {
        return "delete Details of page";
    });

});